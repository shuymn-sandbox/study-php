<?php

declare(strict_types=1);
require_once("SpeedTestBase.php");

class SpeedTest extends SpeedTestBase
{
    public function func1()
    {
        $var = null;
        if (is_null($var)) {
            //
        }
    }

    public function func2()
    {
        $var = null;
        if ($var === null) {
            //
        }
    }
}

$instance = new SpeedTest();
$instance->start();
