<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

//本番環境データベース 
$prod_db ='';
// 本番環境ホスト
$prod_host = '';
// 本番環境ID
$prod_id = '';
// 本番環境PW
$prod_pw = '';

// データベースに接続
$db = new PDO('mysql:dbname='.$prod_db.';host='.$prod_host,$prod_id,$prod_pw);

    // データベースに接続
    // $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    // ユーザー情報をデータベースから取得
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);

    if ($stmt->rowCount() > 0) {
        // ログイン成功
        header('Location: script.php');
        exit;
    } else {
        // ログイン失敗
        echo "ユーザー名またはパスワードが間違っています。";
    }
}
?>

<form method="POST">
    ユーザー名: <input type="text" name="username"><br>
    パスワード: <input type="password" name="password"><br>
    <input type="submit" value="ログイン">
</form>
