<?php 

try {

    $user =  "team-e";
    $password = "SYr3x8XLZCOLxx*k";
    $pdo_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $dbh = new PDO("mysql:host=localhost;dbname=team-e;charaset=utf8mb4", $user, $password, $pdo_options); 
    $dbh->beginTransaction();      
    $stmt = $dbh->prepare('UPDATE users SET name=:name, email=:email, password=:password WHERE id=:id');

    // エラーメッセージ
    $err = [];
    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    if(!$name = filter_input(INPUT_GET, 'name')) {
        $err[] = 'ユーザ名を記入してください。';
    } else {
        $stmt->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
    }
   
    if(!$email = filter_input(INPUT_GET, 'email')) {
        $err[] = 'メールアドレスを記入してください。';
    } else {
        $stmt->bindValue(':email', $_GET['email'], PDO::PARAM_STR);
    }
    
    if (!$password = filter_input(INPUT_GET, 'password')) {
        $err[] = 'パスワードを記入してください。';
    } elseif ($_GET['password'] !== $_GET['password_conf']) {
        $err[] = '確認用パスワードと異なっています。';
    } elseif (!preg_match("/\A[a-z\d]{8,100}+\z/i" , $_GET['password'])) {
        $err[] = 'パスワードは英数字8文字以上100文字以下にしてください。';
    } else {
        $stmt->bindValue(':password', password_hash($_GET['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
        $stmt->execute();
        $dbh->commit();
    }

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
    <link href="../../public/css/update_profile.css" rel="stylesheet">
    <title>プロフィール更新完了</title>
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
        <?php if (count($err) > 0) : ?>
            <?php foreach($err as $e) : ?>
                <p><?php echo $e ?></p>
            <?php endforeach ?>
            <p><a href="profile.php">やり直す</a></p>
        <?php else : ?>
            <h2>プロフィール更新完了</h2>
            <p><a href="mypage.php">マイページへ</a></p>
        <?php endif?>
            
    </main>
    
</body>
</html>