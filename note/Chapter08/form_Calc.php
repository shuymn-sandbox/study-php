<?php require_once("../Lib/lib.php");?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo _ht(__FILE__); ?></title>
</head>
<body>
<div>

    <form method="post" action="calc.php">
        <ul>
            <li><label>単価: <input type="number" name="tanka" ></label></li>
            <li><label>個数: <input type="number" name="kosu" ></label></li>
            <li><input type="submit" value="計算する" ></label></li>
        </ul>
    </form>

</div>
</body>
</html>
