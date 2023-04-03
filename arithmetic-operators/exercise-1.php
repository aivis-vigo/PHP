<?php declare(strict_types=1);

function validateNumbers(int $first, $second): bool
{
    if ($first == 15 || $second == 15) {
        return true;
    } elseif ($first + $second == 15 || ($first - $second == 15 || $second - $first == 15)) {
        return true;
    }
    return false;
}

echo validateNumbers(10, 5) ? "true" : "false";