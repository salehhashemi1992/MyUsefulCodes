<?php
$testF = function ($name) {
    return strtoupper($name);
};

echo $testF('something');

function helloWorld($name, $func)
{
    return 'Hello World' . $func($name);

}

