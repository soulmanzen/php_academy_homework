<?php

function searchFor($number, $x)
{
    return substr_count($number, $x);
}

echo searchFor(555833, 3);