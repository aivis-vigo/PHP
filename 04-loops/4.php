<?php

$numbers = [
    12,
    15,
    16,
    8,
    9,
    2,
    19,
    21
];

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 3 === 0) {
        echo $numbers[$i] . PHP_EOL;
    }
}