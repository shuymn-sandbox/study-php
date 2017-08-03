<?php

// 関数

// 一番基本的な形
function sayHello() {
    echo "Hello<br>";
}

// 引数やその初期値を設定できる
function sayName($name = "foo") {
    echo "Hi, " . ${name} . "．<br>";
}

// 戻り値で返すこともできる
function returnName($name = "bar") {
    return "Hello, " . ${name};
}

sayHello();

sayName("Tom");
sayName();

$s = returnName();
var_dump($s);
