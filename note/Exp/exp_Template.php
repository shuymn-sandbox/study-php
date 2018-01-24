<?php

declare(strict_types=1);
require_once("SpeedTestBase.php");

class SpeedTest extends SpeedTestBase
{
    public function func1()
    {
        for ($i = 0; $i < 100000; ++$i) {
            //
        }
    }

    public function func2()
    {
        for ($i = 0; $i < 100000; ++$i) {
            //
        }
    }
}

$instance = new SpeedTest();
$instance->start();
