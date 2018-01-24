<?php

declare(strict_types = 1);
require_once("SpeedTestBase.php");

class SpeedTest extends SpeedTestBase
{
    public function func1()
    {
        $result = 0;
        for ($i = 0; $i < 100000; ++$i) {
            $result += ($i === 0) ? 0 : $i;
        }
    }
    
    public function func2()
    {
        $result = 0;
        for ($i = 0; $i < 100000; ++$i) {
            if ($i !== 0) {
                $result += $i;
            } else {
                $result += 0;
            }
        }
    }
}

$instance = new SpeedTest();
$instance->start();
