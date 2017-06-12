<?php
/**
 * @param string $a
 * @param string $b
 * @return array
 */
function getCommonWords(string $a, string $b):array
{
    $words1 = preg_split ('/\s+/' , $a) ;
    $words2 = preg_split ('/\s+/' , $b) ;
    return array_intersect($words1, $words2);
}

echo join(' ', array_unique(getCommonWords($_POST['text1'], $_POST['text2'])));