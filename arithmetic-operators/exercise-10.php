<?php declare(strict_types=1);

class Geometry
{
    public static function circle(int $r): string {
        return ($r < 0) ? "Invalid input" : number_format(pi() * $r * 2, 2);
    }

    public static function rectangle(int $width, $length): string {
        return ($width < 0 || $length < 0) ? "Invalid input!" : number_format($length * $width, 2);
    }

    public static function triangle(int $base, $height): string {
        return ($base < 0 || $height < 0) ? "Invalid input!" : number_format($base * $height * 0.5, 2);
    }
}

$menu = [
    "Calculate the Area of a Circle",
    "Calculate the Area of a Rectangle",
    "Calculate the Area of a Triangle",
    "Quit"
];

echo "Geometry calculator: " . PHP_EOL;
echo PHP_EOL;

foreach ($menu as $choice) {
    echo $choice . PHP_EOL;
}

$input = (int) readline("Enter your choice (1-4): ");
echo PHP_EOL;

if ($input == 1) {
    $r = (int) readline("Enter radius: ");
    echo Geometry::circle($r);
} elseif ($input == 2) {
    $width = (int) readline("Enter width: ");
    $length = (int) readline("Enter length: ");
    echo Geometry::circle($width, $length);
} elseif ($input == 3) {
    $base = (int) readline("Enter base: ");
    $height = (int) readline("Enter height: ");
    echo Geometry::circle($base, $height);
} elseif ($input == 4) {
    echo "Bye!";
} else {
    echo "This option doesn't exist";
}