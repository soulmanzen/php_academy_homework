<?php


$arr = [1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

$day = $arr[date('N')];

foreach ($arr as $e) {
    if ($e == $day) {
        echo "<i>$e</i> ";
        continue;
    }
    echo "$e ";
}