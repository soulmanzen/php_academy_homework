<?php

$num = 0;
$n = 1000;

while (true) {
    $n /= 2;
    ++$num;
    if ($n < 50) {
        echo 'число ', $n;
        break;
    }
}

echo '<br>';
echo 'итераций ', $num;