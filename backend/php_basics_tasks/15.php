<?php

$a = 2;
$b = 0;
$operator = '%';

switch ($operator) {
    case '+':
        echo "$a + $b = " . ($a + $b);
        break;
    case '-':
        echo "$a - $b = " . ($a - $b);
        break;
    case '/':
        echo ($b == 0) ? "На ноль делить нельзя!" : "$a / $b = " . ($a / $b);
        break;
    case '%':
        echo ($b == 0) ? "На ноль делить нельзя!" : "Остаток от деления $a на $b = " . ($a % $b);
        break;
    default;
}
