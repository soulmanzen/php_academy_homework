<?php
/*
 * создание массива и его наглядный вывод, чтобы увидеть где элементы.
 */
for ($arr = [], $i = 1; $i <= 100; $i++) {
    $arr[] = rand(1, 100);
}

echo "<pre>";
print_r($arr);
echo "</pre>";

echo '<hr>';

/*
 * поиск максимума и минимума потом замена их по ссылке и наглядный вывод получившегося массива для проверки.
 */
$max = $arr[0];
$min = $arr[0];

echo 'max = $arr[0] = ' . $max . '<br>';
echo 'min = $arr[0] = ' .$min . '<br>';

foreach ($arr as $key => $value) {
    if ($max < $arr[$key]) {
        $max = &$arr[$key];
    }
    if ($min > $arr[$key]) {
        $min = &$arr[$key];
    }
}


echo 'max = ' . $max . '<br>';
echo 'min = ' .$min . '<br>';

$buff = $max;
$max = $min;
$min = $buff;

unset($max, $min, $buff);


echo "<pre>";
print_r($arr);
echo "</pre>";
