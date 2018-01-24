<?php

function _es($data, $charset = null)
{
    if (is_null($charset)) {
        $charset = 'UTF-8';
    }

    if (is_array($data)) {
        // 再帰呼び出し
        return array_map(__METHOD__, $data);
    } else {
        return htmlspecialchars($data, ENT_QUOTES, $charset);
    }
}

function _ht($path = null)
{
    if (is_null($path)) {
        $path = 'Title';
    }

    return _es(basename($path));
}

function _ce(array $data)
{
    $result = true;
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            // 含まれている値が配列だったら，文字列に結合する
            $value = implode("", $value);
        }
        if (!mb_check_encoding($value)) {
            $result = false;
            break;
        }
    }
    return $result;
}
