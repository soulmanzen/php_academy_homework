<?php

/**
 * @param string $string
 * @return string
 */
function rever_str(string $string)
{
    $buffer = '';
    $length  = mb_strlen($string)-1;
    for ($i = 0; $i < $length/2; $i++) {
        $buffer = $string[$i];
        $string[$i] = $string[$length-$i];
        $string[$length-$i] = $buffer;
    }
    return $string;
}

echo (rever_str($_POST['text']));