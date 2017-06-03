<?php

function sum(int $x)
{
    $arr = str_split($x);
    return array_sum($arr);
}

echo sum(123);