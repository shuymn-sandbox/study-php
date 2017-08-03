<?php

// 配列 keyとvalue

// 書き方 1
$sales1 = array(
    "yamada" => 200,
    "satou" => 800,
    "tanaka" => 600,
);

// 書き方 2
$sales2 = [
    "yamada" => 200,
    "satou" => 800,
    "tanaka" => 600,
];

var_dump($sales1["satou"]); // 800
$sales1["satou"] = 50;
var_dump($sales1["satou"]); // 50

$colors = ["red", "blue", "pink"];
var_dump($colors[1]); // blue
