<?php require_once("../Lib/lib.php");?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo _ht(__FILE__); ?></title>
</head>
<body>
<div>

    <form method="GET" action="checkNum.php">
        <ul>
            <li><label>番号: <input type="number" name="num" ></label></li>
            <li><input type="submit" value="調べる" ></label></li>
        </ul>
    </form>

</div>
</body>
</html>
