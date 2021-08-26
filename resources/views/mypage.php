<?php 

session_start();
require_once '../../config/UserLogic.php';
require_once '../../config/functions.php';

// ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if (!$result) {
    $_SESSION['login_err'] = 'ユーザを登録してログインしてください！';
    header('Location: signup_form.php');
    return;
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href="../../public/css/styles.css" rel="stylesheet">
    <link href="../../public/css/mypage.css" rel="stylesheet">
    <title>マイページ</title>
</head>
<body>
    <header class="page-header">
      <h1><a href="mypage.php"><img class="logo" src="../images/logo.png"></a></h1>
      <nav>
        <ul class="main-nav">
            <li><a href="problem_list.blade.php">問題一覧</a></li>
            <li><a href="profile.php">プロフィール</a></li>
            <li>
                <form action="logout.php" method="POST">
                    <input type="submit" name="logout" value="ログアウト">
                </form>
            </li>
        </ul>
       </nav>
    </header>

    <h2>マイページ</h2>
</body>
</html>