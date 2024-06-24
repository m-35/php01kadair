<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
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


    // ユーザー情報をデータベースに保存
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $password]);

    // 保存が完了したら、完了画面にリダイレクト
    header('Location: complete.php');
    exit;
}
?>

<form method="POST">
    ユーザー名: <input type="text" name="username" placeholder="英字のみ"><br>
    Email: <input type="email" name="email"><br>
    パスワード: <input type="password" name="password" placeholder="数字４桁" minlength="4" maxlength="4"><br>
    <input type="submit" value="登録">
</form>
