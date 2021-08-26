<?php 

try {

    $user =  "team-e";
    $password = "SYr3x8XLZCOLxx*k";
    $pdo_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $dbh = new PDO("mysql:host=localhost;dbname=team-e;charaset=utf8mb4", $user, $password, $pdo_options);        

    $stmt = $dbh->prepare('SELECT * FROM users WHERE id = :id');

    $stmt->execute(array(':id' => $_GET["id"]));

    $result = 0;

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (Exception $e) {
        echo 'エラーが発生しました。:' . $e->getMessage();
}

require_once '../../config/functions.php';

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
            <li><a href="profile.php">プロフィール</a></li>
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
        <form action="update_profile.php" mthod="POST">
                <input type="hidden" name="id" value="<?php if (!empty($result['id'])) echo(htmlspecialchars($result['id'], ENT_QUOTES)); ?>">
            <p>
                <label for="name">ユーザー名</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="name" value="<?php if (!empty($result['name'])) echo(htmlspecialchars($result['name'], ENT_QUOTES)); ?>">
            </p>
            <p>
                <label for="email">メールアドレス</label>&nbsp;&nbsp;&nbsp;
                <input type="email" name="email" value="<?php if (!empty($result['email'])) echo(htmlspecialchars($result['email'], ENT_QUOTES)); ?>">
            </p>
            <p>
                <label for="password">パスワード</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" name="password" value="<?php if (!empty($result['password'])) htmlspecialchars($result['password'], ENT_QUOTES); ?>">
            </p>
            <p>
                <label for="password_conf">パスワード確認</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" name="password_conf" value="<?php if (!empty($result['password'])) htmlspecialchars($result['password'], ENT_QUOTES); ?>">
            </p>
            <div class="save-button">
                <input type="submit" value="保存する">
            </div>
        </form>
    </main>
    
</body>
</html>