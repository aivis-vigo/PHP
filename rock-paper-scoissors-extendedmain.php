<?php

$elements = [
    'rock',
    'paper',
    'scissors'
];
$computerChoice = $elements[array_rand($elements)];

$playerChoice = strtolower(readline('Your Choice : '));

$message = "PC: " . ucfirst($computerChoice) . ' vs Player: ' . ucfirst($playerChoice) . ". Draw!" . PHP_EOL;

if ($computerChoice == $playerChoice)
{
    echo $message;
} elseif ($computerChoice == $elements[0] && $playerChoice == $elements[1])
{
    echo $message;
} elseif ($computerChoice == $elements[1] && $playerChoice == $elements[2])
{
    echo $message;
} elseif ($computerChoice == $elements[2] && $playerChoice == $elements[0])
{
    echo $message;
} else {
    echo "PC: " . ucfirst($computerChoice) . ' vs Player: ' . ucfirst($playerChoice) . PHP_EOL;
    echo "PC Won!";
}
