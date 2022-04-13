<?php
$testF = function ($name) {
    return strtoupper($name);
};

echo $testF('something');

function helloWorld($name, $func)
{
    return 'Hello World' . $func($name);

}

$message = "helloWorld";

// access globals using "use" keyword
$test = function () use ($message) {
    echo $message;
};

// or we can use arrow functions
$c = 10;

$add = fn($a, $b) => $a + $b + $c;
$add(5, 10);
