<?php
session_start();
require_once '../../config/functions.php';
require_once '../../config/UserLogic.php';

$result = UserLogic::checkLogin();
if($result) {
    header('Location: mypage.php');
    return;
}

$login_err = isset($_SESSION['login_err']) ? $_SESSION['login_err'] : null;
unset($_SESSION['login_err']);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href="../../public/css/styles.css" rel="stylesheet">
    <link href="../../public/css/signup_form.css" rel="stylesheet">
    <title>ユーザ登録画面</title>
</head>
<body>
    <?php if (isset($login_err)) : ?>
        <p><?php echo $login_err; ?></p>
    <?php endif; ?>
    <div class="contents">
        <form action="register.php" method="POST">
            <p>
                <label for="username">ユーザー名</label>
                <input type="text" name="username">
            </p>
            <p>
                <label for="email">メールアドレス</label>
                <input type="email" name="email">
            </p>
            <p>
                <label for="password">パスワード</label>
                <input type="password" name="password">
            </p>
            <p>
                <label for="password_conf">パスワード確認</label>
                <input type="password" name="password_conf">
            </p>
            <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
            <div class="signup-button">
                    <button type="submit" name="message" onclick="location.href='./register.php'">新規登録</button>
            </div>
            <div class="login"><a href="login_form.php">ログインはこちら</a></div>
            </form>
    </div>
    
</body>
</html>