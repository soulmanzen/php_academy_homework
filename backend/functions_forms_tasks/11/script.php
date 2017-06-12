<?php
/**
 * @param $str
 * @return string
 */
function my_mb_ucfirst($str) : string
{
    $fc = mb_strtoupper(mb_substr($str, 0, 1));
    return $fc.mb_substr($str, 1);
}

/**
 * @param string $string
 * @return string
 */
function capital_first(string $string) : string
{
    $sentences = explode('. ', $string);

    foreach ($sentences as  &$sentence) {
        $sentence = my_mb_ucfirst($sentence);
    }
    return implode('. ', $sentences);
}


echo capital_first($_POST['text']);
