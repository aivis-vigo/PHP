<?php

$value = readline('Enter a number : ');

if ($value >= 1 && $value <= 100) {
    echo 'In range';
} else {
    echo 'Not in range';
}