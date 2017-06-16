<?php
/**
 * @param string $directory
 * @param string $word
 */
function files_in_dir_w(string $directory, string $word)
{
    foreach (scandir($directory) as $item) {
        if (is_file($item)) {
            if (strpos($item, $word) !== false) {
                echo $item . '<br>';
            }
        }
    }
}

files_in_dir_w('C:\xampp\htdocs\php_academy_homework\backend\functions_forms_tasks', "1");