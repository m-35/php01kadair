<?php
require_once('upload_video.php');

//1.  DB接続します
//本番環境データベース 
$prod_db ='';
// 本番環境ホスト
$prod_host = '';
// 本番環境ID
$prod_id = '';
// 本番環境PW
$prod_pw = '';

try {
    $pdo = new PDO('mysql:dbname='. $prod_db .';charset=utf8;host='. $prod_host,$prod_id,$prod_pw);
    // ここでデータベース操作を行う
} catch (PDOException $e) {
    exit('DBConnectError:データベース接続エラー: '.$e->getMessage());
}


//２．データ取得SQL作成copilot
$tableName = 'users';
$stmt = $pdo->prepare("SELECT * FROM $tableName");
$status = $stmt->execute();

//２．データ取得SQL作成
// $stmt = $pdo->prepare("SELECT * FROM users".$prod_db);
// $status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= htmlspecialchars($result['id'] ).' : ' . htmlspecialchars($result['username'] ).' : ' . htmlspecialchars($result['email'] ).' :' . htmlspecialchars($result['password']);
        $view .= '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>アカウント登録者一覧表</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>