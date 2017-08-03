<?php

// 関数 つづき
// 組み込み関数

$x = 5.6;
echo ceil($x) . "<br>"; // 切り上げ
echo floor($x) . "<br>"; // 切り捨て
echo round($x) . "<br>"; // 四捨五入
echo rand(1, 10) . "<br>"; // 1-10からランダムに

$s1 = "hello";
$s2 = "ねこ";
echo strlen($s1) . "<br>"; // 文字数を数える
echo mb_strlen($s2) . "<br>"; // 文字数を数える(マルチバイト)
printf("%s - %s - %.3f <br>", $s1, $s2, $x);

$colors = ["red", "blue", "pink"];
echo count($colors) . "<br>"; // 要素数
echo implode("@", $colors); // 要素を指定した区切り文字で連結して出力
