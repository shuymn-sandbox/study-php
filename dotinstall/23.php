<?php

// 抽象クラス : 継承前提のクラスで，これ自身を初期化して使うことはできない

abstract class BaseUser {
    public $name;
    // 継承後に必ず実装する必要があるだけで，この段階では処理は書かなくて良い
    // 実装漏れを防ぐ
    abstract public function sayHello();
}

class User extends BaseUser {
    public function sayHello() {
        echo "Hello from User";
    }
}

$test = new User();
$test->sayHello();
