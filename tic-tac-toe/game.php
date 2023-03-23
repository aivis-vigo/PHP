<?php

echo "Welcome to Tic-Tac-Toe!" . PHP_EOL;
echo "-----------------------" . PHP_EOL;

$field = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];

$current = 0;
$moveCount = 4;

while ($current < $moveCount)
{
    foreach ($field as $key=>$value)
    {
        echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
    }

    $playerX = readline("Player-X choose row & column: ");
    $playerXChoice = str_split($playerX);

    $selectElementX = $field[$playerXChoice[0]][$playerXChoice[1]];
    $field[$playerXChoice[0]][$playerXChoice[1]] = str_replace($selectElementX, "x", $selectElementX);

    $playerO = readline("Player-O choose row & column: ");
    $playerOChoice = str_split($playerO);

    $selectElementO = $field[$playerOChoice[0]][$playerOChoice[1]];
    $field[$playerOChoice[0]][$playerOChoice[1]] = str_replace($selectElementO, "o", $selectElementO);

    echo PHP_EOL;

    $current++;

    if ($field[0][0] == "x" && $field[1][1] == "x" && $field[2][2] == "x" || $field[0][0] == "o" && $field[1][1] == "o" && $field[2][2] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[0][0]) . "won!";
        break;
    } elseif ($field[0][2] == "x" && $field[1][1] == "x" && $field[2][0] == "x" || $field[0][2] == "o" && $field[1][1] == "o" && $field[2][0] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[0][2]) . "won!";
        break;
    } elseif ($field[0][0] == "x" && $field[1][0] == "x" && $field[2][0] == "x" || $field[0][0] == "o" && $field[1][0] == "o" && $field[2][0] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[0][0]) . "won!";
        break;
    }  elseif ($field[0][1] == "x" && $field[1][1] == "x" && $field[2][1] == "x" || $field[0][1] == "o" && $field[1][1] == "o" && $field[2][1] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[0][1]) . "won!";
        break;
    } elseif ($field[0][2] == "x" && $field[1][2] == "x" && $field[2][2] == "x" || $field[0][2] == "o" && $field[1][2] == "o" && $field[2][2] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[0][2]) . "won!";
        break;
    } elseif ($field[0][0] == "x" && $field[0][1] == "x" && $field[0][2] == "x" || $field[0][1] == "o" && $field[1][2] == "o" && $field[0][2] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[0][0]) . "won!";
        break;
    } elseif ($field[1][0] == "x" && $field[1][1] == "x" && $field[1][2] == "x" || $field[1][0] == "o" && $field[1][1] == "o" && $field[1][2] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[1][0]) . "won!";
        break;
    } elseif ($field[2][0] == "x" && $field[2][1] == "x" && $field[2][2] == "x" || $field[2][0] == "o" && $field[2][1] == "o" && $field[2][2] == "o")
    {
        foreach ($field as $key=>$value)
        {
            echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
        }

        echo "Player-" . ucfirst($field[2][0]) . "won!";
        break;
    }
}

foreach ($field as $key=>$value)
{
    echo "| " . $value[0] . " | " . $value[1] . " | " . $value[2] . " |" . PHP_EOL;
}

echo "Tie!";