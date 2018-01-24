<?php require_once("Runner.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Runner</title>
</head>
<body>
<pre>
<?php
$runner = new Runner("山田太郎", 21);
$runner->who();
?>
</pre>
</body>
</html>
