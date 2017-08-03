<?php

// ループ処理(for)
// 5 を飛ばして，7を最後にループを抜ける

for ($i = 0; $i < 10; $i++) {
    if ($i === 5) continue;
    if ($i === 8) break;
    echo $i;
}
