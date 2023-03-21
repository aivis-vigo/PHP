<?php

$elements = [
    'rock',
    'paper',
    'scissors',
    'lizard',
    'spock'
];

$winningElements = [
    'rock' => ['scissors', 'lizard'],
    'paper' => ['rock', 'spock'],
    'scissors' => ['paper', 'lizard'],
    'lizard' =>  ['paper', 'spock'],
    'spock' =>  ['scissors', 'rock']
];

$computerChoice = $elements[array_rand($elements)];

$playerChoice = strtolower(readline('Your Choice: '));

$message = "PC: " . ucfirst($computerChoice) . ' vs Player: ' . ucfirst($playerChoice);

if ($computerChoice == $playerChoice)
{
    echo $message . '. Draw!';
} elseif (in_array($computerChoice, $winningElements[$playerChoice])) {
    echo $message . '. Player Won!';
} else {
    echo $message . '. PC Won!';
}
