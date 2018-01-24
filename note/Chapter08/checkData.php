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
    $data = $_GET["data"];
    // URLデコード
    $data = rawurldecode($data);
    // XSS対策
    $data = _es($data);
    echo "\"{$data}\"を受け取りました";
    ?>

</div>
</body>
</html>
