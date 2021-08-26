<?php 

session_start();
$session_id = session_id();

try {

    $user =  "team-e";
    $password = "SYr3x8XLZCOLxx*k";
    $pdo_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $dbh = new PDO("mysql:host=localhost;dbname=team-e;charaset=utf8mb4", $user, $password, $pdo_options);       

    $stmt = $dbh->query('SELECT * FROM users');

    $result = 0;

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
        echo 'エラーが発生しました。:' . $e->getMessage();
}

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
        <h2>プロフィール</h2>
            <?php foreach ($result as $user): ?>
        <p>ユーザー名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $user['name'] ?></p>
        <p>メールアドレス：&nbsp;
            <?php echo $user['email'] ?></p>
            <p>パスワード：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;********
            <?php $user['password'] ?>
        </p>
        <div class="change-button">
            <?php echo "<a href=edit_profile.php?id=" . $user["id"] . ">編集する</a>"; ?>
            <?php endforeach; ?>
        </div>
    </main>
    
</body>
</html>