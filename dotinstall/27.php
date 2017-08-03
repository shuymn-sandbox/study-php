<?php

// 例外処理 : 予期せぬ結果に備える

const NEWLINE = "<br />";

function div($a, $b) {
    try {
        if ($b === 0) {
            throw new Exception("cannot divide by 0");
        }
        echo $a / $b . NEWLINE;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

div(7, 2);
div(5, 0); // 0で割るとエラーが起きる
