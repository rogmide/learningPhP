<?php

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line = null
) {
    echo $type . ': ' . $msg . ' in ' . $file . ' on Line' . $line;
    exit;
}

// set custom error handlers
set_error_handler('errorHandler', E_ALL);

echo $x;
