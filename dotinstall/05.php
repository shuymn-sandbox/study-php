<?php

// 定数

define("MY_EMAIL", "mail@example.com"); // 変数名は慣習的に大文字

echo MY_EMAIL;
// MY_EMAIL = "hoge"; これはエラー

// 自動的に定義される定数
var_dump(__LINE__); // このコードがあるのは何行目か
var_dump(__FILE__); // このファイルの名前は
var_dump(__DIR__); // このファイルはどこにあるか
