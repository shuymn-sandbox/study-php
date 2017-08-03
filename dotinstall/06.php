<?php

// 数値型の演算
// ** べき乗

$a = 10 % 3; // 1
$b = 30.2 / 4; // 7.55

var_dump($a);
var_dump($b);

// 単項演算子
$c = 5;
$c++;
var_dump($c); // 6
$c--;
var_dump($c); // 5

// 代入を伴う演算子
$d = 5;
$d = $d + 2; // 7
var_dump($d);
$d += 2; // 9
var_dump($d);
