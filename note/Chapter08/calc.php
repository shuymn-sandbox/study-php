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

    // フォームに入力された内容を得る
    $tanka = $_POST["tanka"];
    $kosu = $_POST["kosu"];
    // 計算
    $price = $tanka * $kosu;
    // 表示
    $tanka = number_format($tanka);
    $price = number_format($price);
    echo "単価 {$tanka} 円 x {$kosu} 個は {$price} 円です", "\n";
    ?>

</div>
</body>
</html>
