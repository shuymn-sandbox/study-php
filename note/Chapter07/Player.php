<?php

class Player
{
    public $name;

    function __construct($name = 'NoName')
    {
        $this->name = $name;
    }

    // Stringにキャストされたときに返す文字列(マジックメソッド)
    public function __toString()
    {
        return $this->name;
    }

    public function who()
    {
        echo "{$this->name}です", "\n";
    }
}
