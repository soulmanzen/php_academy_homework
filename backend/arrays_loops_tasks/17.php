<?php


$arr = [
    1 => 'Январь', 'Февраль', 'Март',
    'Апрель', 'Май', 'Июнь',
    'Июль','Август', 'Сентябрь',
    'Октябрь', 'Ноябрь', 'Декабрь'
];

$month = $arr[date('n')];


foreach ($arr as $e) {
    if ($e == $month) {
        echo "<b>$e</b> ";
        continue;
    }
    echo "$e ";
}