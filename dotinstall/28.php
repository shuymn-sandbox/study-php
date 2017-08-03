<?php

$username = '';
// ページに何かが起きたか否かを条件分岐
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // 何かが投稿されたかチェック
    $username = $_POST['username']; // postされた内容を格納
    $err = false;
    if (strlen($username) > 8) {
        $err = true; // 8文字以上だったらエラー
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Check Username</title>
</head>
<body>
<form action="" method="POST">
    <input name="username" placeholder="user name"
           value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="submit" value="Check">
    <?php if ($err) { echo "Too long!"; } ?>
</form>
</body>
</html>
