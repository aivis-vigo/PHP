<?php declare(strict_types=1);

$height = (int) readline("Enter height (cm): ");
$weight = (int) readline("Enter weight (kg): ");

$bmi = (2.2 * $weight) * 703 / pow((0.39 * $height), 2);

switch ($bmi) {
    case $bmi < 18.5:
        echo "Bmi under 18.5 means underweight. Yours is " . number_format($bmi, 1);
        break;
    case $bmi >= 18.5 && $bmi <= 25:
        echo "Bmi in between 18.5 and 25 means optimal. Yours is " . number_format($bmi, 1);
        break;
    case $bmi > 25:
        echo "Bmi over 25 means overweight. Yours is " . number_format($bmi, 1);
        break;
}