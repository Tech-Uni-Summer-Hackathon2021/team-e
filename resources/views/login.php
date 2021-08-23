<?php 

session_start();
require_once '../../config/UserLogic.php';

// エラーメッセージ
$err = [];

// バリデーション
if(!$email = filter_input(INPUT_POST, 'email')) {
    $err['email'] = 'メールアドレスを記入してください。';
}
if(!$password = filter_input(INPUT_POST, 'password')) {
    $err['password'] = 'パスワードを記入してください。';
}

if(count($err) > 0) {
    // エラーがあった場合は戻す
    $_SESSION = $err;
    header('Location: login_form.php');
    return;
}
// ログイン成功時の処理
$result = UserLogic::login($email, $password);

if($result) {
    // そのままマイページへ
    header('Location: mypage.php');
    return;
}
// ログイン失敗時の処理
if (!$result) {
    header('Location: login_form.php');
    return;
}

?>