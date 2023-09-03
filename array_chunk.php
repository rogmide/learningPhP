<?php

require 'helper.php';


$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$items2 = ['x' => 5, 'y' => 6, 'w' => 7, 'z' => 8, 't' => 9];
$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];
$array3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

prettyPrintArray(array_chunk($items, 2, true));
// this one the leng of the array has to be the same
prettyPrintArray(array_combine($array1, $array2));
prettyPrintArray(array_filter($array3, fn ($number) => $number % 2 === 0));
prettyPrintArray(array_keys($items));
prettyPrintArray(array_map(fn ($num) => $num * 3, $array3));
prettyPrintArray(array_map(fn ($num1, $num2) => $num1 * $num2, $items, $items2));
prettyPrintArray(array_keys($items));
prettyPrintArray(array_merge($array1, $array2));
// search return the key of the item or 0 if not there
var_dump(array_search(4, $items));

// Destructing

$ar = [1, 2, 3, 4, 5];
[$a, $b, $c, $d, $e] = $ar;
echo $a, $b, $c, $d, $e;
