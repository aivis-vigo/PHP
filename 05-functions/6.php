<?php

$elements = [
    12,
    23,
    35,
    78.3,
    'word'
];

for ($i = 0; $i < count($elements); $i++) {
    if (is_int($elements[$i])) {
        echo $elements[$i] * 2 . PHP_EOL;
    }
}