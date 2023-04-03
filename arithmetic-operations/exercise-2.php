<?php declare(strict_types=1);

function oddOrEven($num): string
{
    return ($num & 0 != 2) ? "$num is odd!" . PHP_EOL . "Bye!" : "$num is even!" . PHP_EOL . "Bye!";

}

echo oddOrEven(6);