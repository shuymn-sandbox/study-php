<?php

// 配列 と foreach

// パターン 1
$sales = [
    "yamada" => 200,
    "satou" => 800,
    "tanaka" => 600,
];

foreach ($sales as $key => $value) {
    echo "($key) $value<br>";
}

// パターン 2
$colors = ["red", "blue", "pink"];

foreach ($colors as $value) {
    echo"$value<br>";
}

// foreach if while for のコロン構文
foreach ($colors as $value) :
    echo"$value<br>";
endforeach;

?>
<!-- コロン構文はHTMLに埋め込むときに便利 -->
<ul>
   <?php foreach ($colors as $value) : ?>
    <li><?php echo "$value "; ?></li>
    <?php endforeach; ?>
</ul>
