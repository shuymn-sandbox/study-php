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
    $data = "東京";
    $data = rawurlencode($data);
    $url = "checkData.php";
    echo "<a href={$url}?data={$data}>", "送信する", "</a>";
    ?>

</div>
</body>
</html>
