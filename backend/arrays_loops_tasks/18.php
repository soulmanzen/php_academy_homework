<?php


$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

foreach ($arr as $key => $e) {
    if ($key == 5 || $key == 6) {
        echo "<b>$e</b> ";
        continue;
    }
    echo "$e ";
}