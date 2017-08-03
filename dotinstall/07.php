<?php

// 文字列
$name = "shuymn";
$s1 = "Hello ${name}!\nhello again!"; // 変数は展開される
$s2 = 'Hello $name!\nhello again!'; // 変数が展開されない
var_dump($s1);
var_dump($s2);

// 連結
$s = "hello " . "world"; // ピリオドで連結
var_dump($s);
