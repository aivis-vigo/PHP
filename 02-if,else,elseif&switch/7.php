<?php

$number = intval(readline('Enter number : '));

switch ($number) {
    case ($number < 50):
        echo 'low';
        break;
    case ($number >= 50 && $number < 100):
        echo 'medium';
        break;
    case ($number >= 100):
        echo 'high';
        break;
}