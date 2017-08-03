<?php

// loop処理

$i = 0;
echo "while: ";
while ($i < 10) {
    echo $i;
    $i++;
}

echo "<br />";

$j = 0;
echo "do-while: ";
do {
    echo $j;
    $j++;
} while ($j < 10);
