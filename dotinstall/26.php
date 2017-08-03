<?php

// 名前空間 : 他人の作ったクラスファイルと名前のバッティングが起こるかもしれない

require "25.class.php";

// 階層化していくと，わかりにくくなっていくので別名をつけることもできる
use Dotinstall\Lib as Lib;

// $bob = new Dotinstall\Lib\User("Bob");
$bob = new Lib\User("Bob");
$bob->sayHello();
