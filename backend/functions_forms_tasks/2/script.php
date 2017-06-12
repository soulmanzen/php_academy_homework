<?php
/**
 * @param string $string
 * @return string
 */
function top3(string $string):string
{
    $words = preg_split ('/\s+/' , $string);

    usort($words, function ($a, $b)
        {
            return mb_strlen($b)<=>mb_strlen($a);
        }
    );

    $slice = array_slice($words, 0, 3);

    return join(' ', $slice);
}


echo top3($_POST['text']);