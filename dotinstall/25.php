<?php

// require : エラーが出るとfatal errorを発生して処理を中止
// require_once : php が自動的にそのファイルが読み込んでいるかチェックする(してなかったらスキップ)
// include : エラーが出るとwarningを発生して処理は続行
// include_once
// require "25.class.php";

// autoload : コード中のClassが未定義だった場合に実行される
spl_autoload_register(function() {
    require "25.class.php";
});

$bob = new User("Bob");
$bob->sayHello();
