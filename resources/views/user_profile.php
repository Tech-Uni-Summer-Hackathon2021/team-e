<?php 

session_start();
$session_id = session_id();
require_once '../../config/env.php';
require_once '../../config/UserLogic.php';
require_once '../../config/functions.php';

// ログインしているか判定し、していなかったら新規登録画面へ返す
$result = UserLogic::checkLogin();

if (!$result) {
    $_SESSION['login_err'] = 'ユーザを登録してログインしてください！';
    header('Location: signup_form.php');
    return;
}
$login_user = $_SESSION['login_user'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href="../../public/css/styles.css" rel="stylesheet">
    <link href="../../public/css/profile.css" rel="stylesheet">
    <title>プロフィール</title>
</head>
<body>
    <header class="page-header">
    <h1><a href="mypage.php"><img class="logo" src="../images/logo.png"></a></h1>
      <nav>
        <ul class="main-nav">
            <li><a href="problem_list.blade.php">問題一覧</a></li>
            <li><a href="user_profile.php">プロフィール</a></li>
            <li>
                <form action="logout.php" method="POST">
                    <input type="submit" name="logout" value="ログアウト">
                </form>
            </li>
        </ul>
       </nav>
    </header>

    <main class="contents wrapper">
        <h2>プロフィール</h2>
        <p>ユーザー名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo h($login_user['name']); ?></p>
        <p>メールアドレス：&nbsp;
            <?php echo h($login_user['email']); ?></p>
        <p>パスワード：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;********
        </p>
        <div class="change-button">
            <a href="edit_user_profile.php">編集する</a>
        </div>
    </main>
    
</body>
</html>