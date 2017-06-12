<?php

function count_uniq_words(string $string)
{
    $words = explode(' ', $string);

    return count(array_unique($words));
}

echo count_uniq_words($_POST['text']);