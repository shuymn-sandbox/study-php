<?php require_once("../Lib/lib.php"); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo _ht(__FILE__); ?></title>
</head>
<body>
<div>
    <pre>
    <?php

    $myCode = "<h2>テスト</h2>";
    $myArray = [
        "a" => "<p>赤</p>",
        "b" => "<script>alert('hello')</script>"
    ];
    echo '$myCode : ', _es($myCode), "\n\n";
    echo '$myArray :';
    print_r(_es($myArray));
    ?>
    </pre>
</div>
</body>
</html>
