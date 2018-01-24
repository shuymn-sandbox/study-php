<?php

class Staff
{
    // クラスプロパティ
    public static $piggyBank = 0;
    // クラスメソッド
    public static function deposit(int $yen)
    {
        self::$piggyBank += $yen;
    }
    // スタンスプロパティ
    public $name;
    public $age;

    // インスタンスが作られるときに自動で呼ばれる関数
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // インスタンスメソッド
    public function hello()
    {
        if (is_null($this->name)) {
            echo "こんにちは", "\n";
        } else {
            echo "こんにちは，{$this->name}です", "\n";
        }
    }

    // 遅刻したら罰金を払わせる
    public function latePenalty()
    {
        self::deposit(1000);
    }
}
