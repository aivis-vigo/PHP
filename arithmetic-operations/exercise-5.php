<?php declare(strict_types=1);

$number = rand(1, 100);
$tries = 0;
$maxTries = 3;

while ($tries < $maxTries)
{
    $guess = (int) readline("Guess the number: ");

    if ($guess == $number) {
        echo "You guessed it!  What are the odds?!?";
        break;
    } elseif ($guess < $number) {
        echo "Sorry, you are too low." . PHP_EOL;
        $tries++;
    } else {
        echo "Sorry, you are too high." . PHP_EOL;
        $tries++;
    }
}

echo PHP_EOL;
echo "I was thinking of $number";