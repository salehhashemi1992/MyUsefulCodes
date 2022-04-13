<?php

function sum(...$numbers)
{
    $base = 0;
    foreach ($numbers as $number) {
        $base += $number;
    }

    return $base;
}

$array = [0,1,2,4,5,6,7,8,34,534];

echo sum(...$array);

echo sum(1,534,5,4,23,5,7,5);