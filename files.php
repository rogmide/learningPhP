<?php

$dir = scandir(__DIR__);

// var_dump($dir);

$file = fopen('foo.txt', 'r');
while (($line = fgets($file) !== false)) {
    echo $line . '<br />';
}

fclose($file);
