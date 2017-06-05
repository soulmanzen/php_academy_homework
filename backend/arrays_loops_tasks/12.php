<?php

$num = 0;
$n = 1000;

while ($n>=50) {
    $n /= 2;
    $num++;
}

echo 'число ', $n;
echo '<br>';
echo 'итераций ', $num;