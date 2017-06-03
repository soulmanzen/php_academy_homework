<?php

$colors = array('red','yellow','blue','gray','maroon','brown','green');

function buildTable (int $row, int $cols)
{
    $colors = array('red','yellow','blue','gray','maroon','brown','green');

    echo '<table>';
    for ($i = 1; $i <= $row; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $cols; $j++) {
            $rand_color = array_rand($colors);
            $rand_number = mt_rand();
            echo "<td style='background-color: $colors[$rand_color]'>$rand_number</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}

buildTable(5, 5 );