<?php

const NEWLINE = "<br />";

// static キーワード : インスタンス化してなくても使えるメソッドやプロパティを定義するときに使う

class User {
    public $name;
    public static $count = 0; // インスタンス化した回数を格納するためのメソッド
    public function __construct($name) {
        $this->name = $name;
        self::$count++;
    }
    public function sayHello() {
        echo "Hello, this is " . $this->name . NEWLINE;
    }
    public static function showMessage() {
        echo "hello from User class" . NEWLINE;
    }
}

User::showMessage();

$tom = new User("Tom");
$bob = new User("Bob");

echo User::$count . NEWLINE;
