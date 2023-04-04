<?php declare(strict_types=1);

$input = readline("Enter the number: ");

if ($input >= 0) {
    if (count(str_split($input)) > 1) {
        echo "$input has " . count(str_split($input)) . " digits";
    } else {
        echo "$input has " . count(str_split($input)) . " digit";
    }
} else {
    echo "Number has to be positive!";
}