<?php require_once("../Lib/lib.php");?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo _ht(__FILE__); ?></title>
</head>
<body>
<div>

    <?php
    // GETリクエストのパラメータの値を受け取る
    $num = $_GET["num"];
    // 番号のリスト
    $numlist = [1, 2, 3, 5, 8, 13, 21, 34];
    // 検索
    if (in_array($num, $numlist)) {
        echo "{$num} はありました";
    } else {
        echo "{$num} はありませんでした";
    }
    ?>

</div>
</body>
</html>
