<?php

require_once("DataTool.php");

class Milk
{
    // DataTools trait を使う
    use DataTool;

    public $theDate;
    public $limitDate;

    function __construct()
    {
        // 今日の日付
        $now = new DateTime();
        // 年月日になおして設定
        $this->theDate = $this->ymdString($now);
        // 10日後の日付
        $this->limitDate = $this->addYmdString($now, 10);
    }
}
