<?php

echo "Welcome to Word Guessing Game!". PHP_EOL;
echo "------------------------------";

$words = ['balloon', 'weapon', 'church', 'market', 'spring', 'banana'];
$choice = array_rand($words);

$gameWord = $words[$choice];
$letters = str_split($gameWord);
$answer = str_split(str_repeat("_", strlen($gameWord)));

$guesses = 0;
$maxGuesses = 3;

while ($guesses < $maxGuesses)
{
    echo "Your word: ";
    echo join("", $answer);

    echo PHP_EOL;
    $userInput = readline('Enter letter: ');
    echo PHP_EOL;

    $index = array_search($userInput, $letters);

    if ($index > -1)
    {
        $multiple = str_split($userInput);
        $result = array_intersect($letters, $multiple);

        foreach ($result as $key=>$val)
        {
            $answer[$key] = $userInput;
            $letters[$key] = "-";
        }

        if ($gameWord == join("", $answer))
        {
            echo "------------------------------" . PHP_EOL;
            echo "Word was " . $gameWord . "." . PHP_EOL;
            echo "You win!" . PHP_EOL;
            break;
        }
    } else
    {
        $guesses++;
    }
}

if (!($gameWord == join("", $answer)))
{
    echo "------------------------------" . PHP_EOL;
    echo "You lose!";
}
