<?php

namespace Dotinstall\Lib; // 階層的に管理できる．かならず文頭に記述する

const NEWLINE = "<br />";

class User {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function sayHello() {
        echo "Hello, $this->name" . NEWLINE;
    }
}
