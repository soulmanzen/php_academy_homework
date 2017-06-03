<?php

$arr = [4, 2, 5, 19, 13, 0, 10];

foreach ($arr as $e) {
    switch ($e) {
        case 2:
            echo 'Есть!';
            break;
        case 3:
            echo 'Есть!';
            break;
        case 4:
            echo 'Есть!';
            break;
        default:
            echo 'Нет!';
    }
}