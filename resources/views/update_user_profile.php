<?php 

session_start();

require_once '../../config/env.php';

try {

    $host = DB_HOST;
    $db = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $dbh = new PDO($dsn, $user, $pass, $pdo_options); 
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

    <main class="contents wrapper">
        <?php if (count($err) > 0) : ?>
            <?php foreach($err as $e) : ?>
                <p><?php echo $e ?></p>
            <?php endforeach ?>
            <p><a href="user_profile.php">やり直す</a></p>
        <?php else : ?>
            <h2>プロフィール更新完了</h2>
            <form action="logout.php" method="POST">
                <input type="submit" name="logout" value="ログアウトしてください">
            </form>
        <?php endif?>
            
    </main>
    
</body>
</html>