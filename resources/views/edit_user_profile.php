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
    <link href="../../public/css/edit_profile.css" rel="stylesheet">
    <title>プロフィール編集画面</title>
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
        <h2>プロフィール編集</h2>
        <form action="update_user_profile.php" mthod="POST">
                <input type="hidden" name="id" value="<?php if (!empty($login_user['id'])) echo(htmlspecialchars($login_user['id'], ENT_QUOTES)); ?>">
            <p>
                <label for="name">ユーザー名</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="name" value="<?php if (!empty($login_user['name'])) echo(htmlspecialchars($login_user['name'], ENT_QUOTES)); ?>">
            </p>
            <p>
                <label for="email">メールアドレス</label>&nbsp;&nbsp;&nbsp;
                <input type="email" name="email" value="<?php if (!empty($login_user['email'])) echo(htmlspecialchars($login_user['email'], ENT_QUOTES)); ?>">
            </p>
            <p>
                <label for="password">パスワード</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" name="password" value="<?php if (!empty($login_user['password'])) htmlspecialchars($login_user['password'], ENT_QUOTES); ?>">
            </p>
            <p>
                <label for="password_conf">パスワード確認</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" name="password_conf" value="<?php if (!empty($login_user['password'])) htmlspecialchars($login_user['password'], ENT_QUOTES); ?>">
            </p>
            <div class="save-button">
                <input type="submit" value="保存する">
            </div>
        </form>
    </main>
    
</body>
</html>