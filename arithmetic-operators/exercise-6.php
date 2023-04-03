<?php declare(strict_types=1);

$start = 1;
$line = 11;
$end = 110;
$numbers = [];

for ($x = $start; $x <= $end; $x++) {
    $numbers[] = $x;
}

foreach ($numbers as $number) {
    if ($number % 11 == 0) {
        echo PHP_EOL;
    } elseif ($number % 3 == 0 && $number % 7 == 0) {
        echo "CozaWoza ";
    } elseif ($number % 5 == 0 && $number % 7 == 0) {
        echo "LozaWoza ";
    } elseif ($number % 3 == 0 && $number % 5 == 0) {
        echo "CozaLoza ";
    } elseif ($number % 3 == 0) {
        echo "Coza ";
    } elseif ($number % 5 == 0) {
        echo "Loza ";
    } elseif ($number % 7 == 0) {
        echo "Woza ";
    } else {
        echo "$number ";
    }
}