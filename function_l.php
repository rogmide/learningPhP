<?php

function foo()
{
    return 'Hello World';
}

echo foo();

echo '<br />';

var_dump(foo());


// Spla operator worl like the other languages ...[1,1,1,1,1,]
// Argument we can name it and we dont care what orders is pass
function sum($x, $y, ...$numbers)
{
    return $x + $y + array_sum($numbers);
}
// echo sum(1, 2, 3, 6);

// Sample of name argument
// setcookie(name: 'foo', value: 'bar', httponly: true);

$x = 'sum';

$sum2 = function ($x, $y, ...$numbers) {
    return $x + $y + array_sum($numbers);
};

if (is_callable($x)) {
    echo $x(1, 2, 3, 4);
} else {
    echo 'No Callable';
}

echo '<br />';
echo $sum2(1, 2, 3, 5);
