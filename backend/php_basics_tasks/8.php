<?php
/**
 * Created by PhpStorm.
 * User: SoulMan
 * Date: 26.05.2017
 * Time: 10:27
 */
include "2.php";

if ($age < 0 || !is_numeric($age)) {
    echo 'Неизвестный возраст';
} elseif ($age >= 18 && $age <= 59) {
    echo 'Вам еще работать и работать';
} elseif ($age > 59) {
    echo 'Вам пора на пенсию';
} elseif ($age >= 0 && $age <= 17) {
    echo 'Вам еще рано работать';
}
