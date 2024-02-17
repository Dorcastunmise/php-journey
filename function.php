<?php

$x = 1;
# use() is an example of a closue....it enables usage of variables of a local scope
$sum = function (int|float ...$numbers) use($x): int|float {
    $x = 15;
    echo $x;
    return array_sum($numbers);
}; # for nanonymous functions, end them with a semicolon
echo $Sum(1, 2, 3, 4);

/* Callback function: when a function is passed 
to another function and also used within that function */