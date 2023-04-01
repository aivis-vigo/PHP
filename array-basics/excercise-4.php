<?php declare(strict_types=1);

$numberCount = 10;
$numbers = [];

for ($i = 0; $i < $numberCount; $i++) {
    $numberPush = array_push($numbers, rand(1, 100));
}

//
$duplicate = $numbers;

// last element change to -7
$numbers[count($numbers) - 1] = -7;

echo "Array 1: " . implode(", ", $numbers) . PHP_EOL;
echo "Array 2: " . implode(", ", $duplicate) . PHP_EOL;