<?php

const NEWLINE = "<br />";

// アクセス権
// - private : そのクラス内からのみアクセス可能
// - protected : そのくらす+親子クラス内からのみアクセス可能
// - public : どこからでもアクセス可能

class User {
    // public $name;
    // private $name;
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function sayHello() {
        echo "Hello, this is " . $this->name . NEWLINE;
    }
}

class AdminUser extends User {
    public function sayBay() {
        echo "SAYBAY" . NEWLINE;
    }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");

// echo $tom->name . NEWLINE; エラー
$steve->sayHello();
