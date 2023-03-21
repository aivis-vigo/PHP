<?php

$plateNumber = strtoupper(readline('Enter car plate number : '));


switch ($plateNumber) {
    case 'KZ-609':
        echo "That's your car!";
        break;
    case 'KZ-606':
        echo "That's your moms car!";
        break;
    default:
        echo "That's not your car!";
}