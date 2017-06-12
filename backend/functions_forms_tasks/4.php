<?php
/**
 * @param string $directory
 * @return string
 */
function files_in_dir(string $directory)
{
    return implode(PHP_EOL, scandir($directory));
}

echo nl2br(files_in_dir('C:\xampp\htdocs\php_academy_homework\backend\functions_forms_tasks\3'));