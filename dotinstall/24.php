<?php

const NEWLINE = "<br />";

// interface : 必ず実装させたいメソッドにつける

interface sayHello {
    public function sayHello(); // 必ずメソッドのアクセス権はpublicになる
}

interface sayBay {
    public function sayBay(); // 必ずメソッドのアクセス権はpublicになる
}

class User implements sayHello, sayBay {
    public function sayHello() {
        echo "Hello from User" . NEWLINE;
    }
    public function sayBay()
    {
        echo "SAYBAY" . NEWLINE;
    }
}

$msg = new User();

$msg->sayHello();
$msg->sayBay();
