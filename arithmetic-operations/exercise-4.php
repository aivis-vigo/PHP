<?php declare(strict_types=1);

$factorial = 5;
$value = 1;

for ($i = 1; $i <= $factorial; $i++) {
    $value *= $i;
}

echo "Factorial of $factorial is $value";