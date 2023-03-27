<?php

echo "Game selected - Slots!" . PHP_EOL;
echo "----------------------" . PHP_EOL;

$playerCash = intval(readline("Enter cash to play: $ ")) * 100;
echo PHP_EOL;

$board = [];

$symbols = [
    "A" => 50,
    "K" => 25,
    "Q" => 20,
    "J" => 15,
    "X" => 10
];

$boardRows = 3;
$boardColumns = 4;

while($playerCash >= 10) {
    $button = strtolower(readline("Spin / Quit: "));
    echo PHP_EOL;

    if ($button == "quit") {
        echo "Cash out: " . $playerCash;
        exit();
    }

    for ($i = 0; $i < $boardRows; $i++) {
        echo "- ";
        for ($j = 0; $j < $boardColumns; $j++) {
            echo $board[$i][$j] = array_rand($symbols) . " - ";
        }
        echo PHP_EOL;
    }

    $slotLine = [
        [
            // top left to bottom right 2
            $board[0][0], $board[1][1], $board[2][2], $board[2][3]
        ],
        [
            // bottom left to top right 2
            $board[2][0], $board[1][1], $board[0][2], $board[0][3]
        ],
        [
            // top right to bottom left 2
            $board[0][3], $board[1][2], $board[2][1], $board[2][0]
        ],
        [
            // bottom right to top left 2
            $board[2][3], $board[1][2], $board[0][1], $board[0][0]
        ],
        [
            // all in one row
            $board[0][0], $board[0][1], $board[0][2], $board[0][3]
        ],
        [
            // all in one row
            $board[1][0], $board[1][1], $board[1][2], $board[1][3]
        ],
        [
            // all in one row
            $board[2][0], $board[2][1], $board[2][2], $board[2][3]
        ],
        [
            // all in one row
            $board[0][0], $board[1][0], $board[2][0]
        ],
        [
            // all in one row
            $board[0][1], $board[1][1], $board[2][1]
        ],
        [
            // all in one row
            $board[0][2], $board[1][2], $board[2][2]
        ],
        [
            // all in one row
            $board[0][3], $board[1][3], $board[2][3]
        ]
    ];

    for ($i = 0; $i < count($slotLine); $i++) {
        if (count(array_unique($slotLine[$i])) == 1) {
            $lineCash = str_split(implode("-", $slotLine[$i]));
            echo "Line! +$" . $symbols[$lineCash[0]] . PHP_EOL;
            $playerCash += $symbols[$lineCash[0]];
            echo PHP_EOL;
        }
    }

    echo "Credit: " . $playerCash -= 10;
    echo PHP_EOL;
    echo PHP_EOL;
}

echo "Game Over!";