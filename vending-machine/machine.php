<?php

echo "------Vending-Machine------" . PHP_EOL;

function createDrink(string $name, int $price): stdClass
{
    $drink = new stdClass();
    $drink->name = $name;
    $drink->price = $price;

    return $drink;
}

// drink menu
$drinks = [
    "espresso s" => createDrink('espresso S', 120),
    "latte l" => createDrink('latte L', 150),
    'latte xl' => createDrink('latte XL', 175),
    'irish cream coffee l' => createDrink('irish cream coffee L', 255),
    'irish cream coffee xl' => createDrink('irish cream coffee XL', 290)
];

// prints out all drinks
echo PHP_EOL;
echo "Available drinks: " . PHP_EOL;
foreach ($drinks as $drink) {
    echo ucfirst($drink->name) . " - " . number_format(($drink->price / 100), 2) . " €" . PHP_EOL;
}

// customer input converted to lowercase letters
echo PHP_EOL;
$customer = strtolower(readline("Select drink: "));
echo "---------------------------" . PHP_EOL;

// customer inserted coins
$addedCoins = 0;
$leftToInsert = number_format($drinks[$customer]->price / 100, 2);

// while inserted coins are less than drink price keep inserting coins
while ($addedCoins < $drinks[$customer]->price)
{
    echo "Insert " . $leftToInsert . " €" . PHP_EOL;
    $insertCoins = intval(readline("Insert here: "));
    echo PHP_EOL;

    // add inserted coins to added coins counter
    $addedCoins += $insertCoins;
    $leftToInsert -= number_format($insertCoins / 100, 2);
    $leftToInsert = number_format($leftToInsert, 2);

    // check if customer inserted enough money and return change
    if ($addedCoins > $drinks[$customer]->price)
    {
        // reduce price depending on how much is inserted
        $change = $addedCoins - $drinks[$customer]->price;

        $coins = [200, 100, 50, 20, 10, 5, 2, 1];
        $changeCoins = [];

        foreach ($coins as $coin)
        {
            $times = floor($change / $coin);

            if ($times >= 1)
            {
                $changeCoins[$coin] = $times;
                $change -= $coin * $times;
            }
        }

        echo "---------------------------" . PHP_EOL;
        echo "Your " . ucfirst($drinks[$customer]->name) . " is ready!" . PHP_EOL;
        echo "Take your change: ";

        foreach ($changeCoins as $changeCoin => $coinTimes)
        {
            echo "| " . $coinTimes . " - " . number_format($changeCoin / 100, 2) . " € |";
        }
    }
}