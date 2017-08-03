<?php

const NEWLINE = "<br />";

// 継承 : あるクラスをもとに新しいクラスを作りたいときに使う

// 親クラス
class User {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    // final をつけると override禁止になる
    // final public function sayHello() {
    public function sayHello() {
        echo "Hello, this is " . $this->name . NEWLINE;
    }
}

// 子クラス : 親の機能を継承
class AdminUser extends User {
    public function sayBay() {
        echo "SAYBAY" . NEWLINE;
    }
    // override
    public function sayHello() {
        echo "[admin] Hello, this is " . $this->name . NEWLINE;
    }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");
// echo $steve->name . NEWLINE;
$tom->sayHello();
$steve->sayHello();
$steve->sayBay();
