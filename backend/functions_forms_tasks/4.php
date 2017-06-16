<?php
/**
 * @param string $directory
 */
function files_in_dir(string $directory)
{
    foreach (scandir($directory) as $item) {
        echo is_file($item) ? $item . '<br>' : false;
    }
}

files_in_dir('C:\xampp\htdocs\php_academy_homework\backend\functions_forms_tasks');