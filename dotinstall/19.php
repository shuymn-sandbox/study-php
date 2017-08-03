<?php

class User {
    // property
    public $name;

    // constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // method
    public function sayHello() {
        echo "Hello, this is $this->name <br>";
    }
}

$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name . "<br>";
$bob->sayHello();
