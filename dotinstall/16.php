<?php

// 関数 つづき
// ローカル変数

$lang = "ruby";

function sayHello($name) {
    $lang = "php";
    echo "Hi, $name from $lang";
}

sayHello("Tom");
var_dump($lang);
