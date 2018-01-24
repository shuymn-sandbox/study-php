<?php

abstract class SpeedTestBase
{
    private $times;

    public function start(int $times = 5) : void
    {
        try {
            $this->setTimes($times);
            $this->run([$this, 'func1']);
            $this->run([$this, 'func2']);
        } catch (Exception $e) {
            echo $e->getMessage(), PHP_EOL;
        }
    }

    public function setTimes(int $times)
    {
        if ($times > 0) {
            $this->times = $times;
        } else {
            throw new Exception('setTimes(): 不正な数字です.');
        }
    }

    public function run(callable $callback)
    {
        $func = $callback[1];
        $time_start = microtime(true);

        for ($i = 0; $i < $this->times; ++$i) {
            $this->$func();
        }

        $time_s = (microtime(true) - $time_start) / $this->times;
        $time_ms = $time_s * 1000;
        echo "{$func}: {$time_s}[s] : {$time_ms}[ms]", PHP_EOL;
    }

    abstract public function func1();

    abstract public function func2();
}
