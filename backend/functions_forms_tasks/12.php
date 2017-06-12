<?php
$string = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';

/**
 * @param string $string
 * @return string
 */
function rev_text_by_sentences(string $string) : string
{
    $sentences = explode('.', $string, -1);

    $reversed = array_reverse($sentences);

    $new_string = implode('. ', $reversed) . '.';

    return $new_string;
}

echo rev_text_by_sentences($string);