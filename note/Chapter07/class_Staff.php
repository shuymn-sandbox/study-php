<?php require_once("Staff.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クラスを定義する</title>
</head>
<body>
<pre>
<?php

// クラスメソッドを実行
Staff::deposit(100);
Staff::deposit(150);
// クラスプロパティを確認
echo Staff::$piggyBank, "円になりました\n";

$hana = new Staff("花子", 22);
$hana->latePenalty();
echo Staff::$piggyBank, "円になりました\n";

?>
</pre>
</body>
</html>
