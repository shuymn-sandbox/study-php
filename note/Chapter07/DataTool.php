<?php

trait DataTool
{
    public function ymdString($date)
    {
        // DateTimeを年月日の書式で返す
        $dateString = $date->format('Y年m月d日 H時i分s秒');
        return $dateString;
    }

    public function addYmdString($date, $days)
    {
        // $days 日あとの年月日を返す
        $date->add(new DateInterval("P{$days}D"));
        return $this->ymdString($date);
    }
}
