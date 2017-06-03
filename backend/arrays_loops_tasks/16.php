<?php


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $e) {
    if ($e == 3 || $e == 6 || $e == 9) {
        echo $e . '<br>';
        continue;
    }
    echo "$e, ";
}