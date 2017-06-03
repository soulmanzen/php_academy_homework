<?php
/*
 * Странное задание, потому что у него все значения больше ноля.
 */
for ($arr = [], $i = 1; $i <= 100; $i++) {
    $arr[] = rand(1, 100);
}

$product = 1;

foreach ($arr as $key => $value) {
    if (!($key % 2)) {
        $product *= $value;
    } else {
        echo "arr[$key] => $value <br>";
    }
}
