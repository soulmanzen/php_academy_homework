<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$en = [];
$ru = [];

foreach ($arr as $key => $item) {
    $en[] = $key;
    $ru[] = $item;
}