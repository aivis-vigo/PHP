<?php declare(strict_types=1);

$first = (int) readline("Input the 1st number: ");
$second = (int) readline("Input the 2nd number: ");
$third = (int) readline("Input the 3rd number: ");

echo "Biggest number: " . max($first, $second, $third);