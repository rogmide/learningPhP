<?php

$x = 5;

function foo()
{
    // GLOBAL scoope variable we dont use this that much
    $GLOBAL['variable'] = 10;
    $y = 1;
    echo $y;
}
