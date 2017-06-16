<?php

/**
 * @param int $n
 * @return string
 */
function delete_long_words(int $n)
{
    $text = file_get_contents('file.txt');

    $callback = function ($match) use ($n) {

        if (mb_strlen($match[0]) > $n) {
            $match[0] = '';
        }
        return $match[0];
    };

    $text_m = preg_replace_callback("/\w+/u", $callback, $text);

    file_put_contents('file.txt', $text_m);

    return 'Операция прошла успешно. Можете проверить файл.';
}

echo is_numeric($_POST['n']) && ($_POST['n'] > 0) ? delete_long_words($_POST['n']) :
    "Вы ввели не положительное число. Вернитесь на предыдущую страницу и введите положительное число.";


