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

// sjisのデータを用意
$strUtf8 = "こんにちは";
$strSjis = mb_convert_encoding($strUtf8, "Shift-JIS");
// 内部エンコーディングを調べる
$encoding = mb_internal_encoding();
// _ce でチェック
if (_ce([$strSjis])) {
    echo "配列の値は ", $encoding, "です";
} else {
    echo "配列の値は ", $encoding, "ではありません";
}

?>
</pre>
</div>
</body>
</html>
