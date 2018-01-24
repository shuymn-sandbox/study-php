<?php require_once("Milk.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Milk.php</title>
</head>
<body>
<pre>
<?php
$myMilk = new Milk();
echo "作成日:", $myMilk->theDate , "\n";
echo "期限日:", $myMilk->limitDate , "\n";
?>
</pre>
</body>
</html>
