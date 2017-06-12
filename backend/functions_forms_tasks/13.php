<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function calc_items(string $string)
{
    $arr = explode(' ', $string);

    $count_arr = array_count_values($arr);

    arsort($count_arr);

    foreach ($count_arr as $key => $value) {
        echo "$key - $value<br>";
    }
}

calc_items($string);