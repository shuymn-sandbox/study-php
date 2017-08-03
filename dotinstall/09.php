<?php

// 真偽値
// falseになる場合
// 文字列: 空，"0"
// 数値: 0，0.0
// 論理値: false
// 配列: 要素数が0
// null

$x = 5;
if ($x) {
    echo "great\n";
}

// 三項演算子
$a = 5;
$b = 10;

$max = ($a > $b) ? $a : $b;
echo "${max}\n";

// 同じ意味の文
if ($a > $b) {
    $max = $a;
} else {
    $max = $b;
}

echo "${max}\n";
