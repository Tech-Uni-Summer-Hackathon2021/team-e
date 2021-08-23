<?php 

session_start();
require_once '../../config/UserLogic.php';

if (!$logout = filter_input(INPUT_POST, 'logout')) {
    exit('不正なリクエストです。');
}


// ログインしているか判定し、セッションが切れていたらログインしてくださいとメッセージを出す。
$result = UserLogic::checkLogin();

if (!$result) {
    exit('セッションが切れましたので、ログインし直してください。');
}

// ログアウトする
UserLogic::logout();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href="../../public/css/styles.css" rel="stylesheet">
    <link href="../../public/css/logout.css" rel="stylesheet">
    <title>ログアウト</title>
</head>
<body>
    <div class="contents wrapper">
        <h2>ログアウト完了</h2>
        <a href="login_form.php">ログイン画面へ</a>
    </div>
</body>
</html>