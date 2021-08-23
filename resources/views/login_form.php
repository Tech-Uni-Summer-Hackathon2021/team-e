<?php
session_start();
require_once '../../config/UserLogic.php';

$result = UserLogic::checkLogin();
if($result) {
    header('Location: mypage.php');
    return;
}

$err = $_SESSION;

// セッションを消す
$_SESSION = array();
session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href="../../public/css/styles.css" rel="stylesheet">
    <link href="../../public/css/login_form.css" rel="stylesheet">
    <title>ログイン画面</title>
</head>
<body>
    <?php if (isset($err['msg'])) : ?>
        <p><?php echo $err['msg']; ?></p>
    <?php endif; ?>
    <div class="contents wrapper">
        
        <form action="login.php" method="POST">
            <p>
                <label for="email">メールアドレス</label>
                <input type="email" name="email">
                <?php if (isset($err['email'])) : ?>
                    <p><?php echo $err['email']; ?></p>
                <?php endif; ?>
            </p>
            <p>
                <label for="password">パスワード</label>
                <input type="password" name="password">
                <?php if (isset($err['password'])) : ?>
                    <p><?php echo $err['password']; ?></p>
                <?php endif; ?>
            </p>
            <div class="login-button">
                <button type="submit" name="message" onclick="location.href='./login.php'">ログイン</button>
            </div>
        </form>
            <div class="signup"><a href="signup_form.php">新規登録はこちら</a></div>
        </div>
</body>
</html>