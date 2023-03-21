<?php

$fruits = [
    "bananas" => [
        "weight" => 6,
    ],

    "apples" => [
        "weight" => 15,
    ],

    "watermelons" => [
        "weight" => 25,
    ],

    "oranges" => [
        "weight" => 8,
    ]
];

foreach ($fruits as $fruit => $value) {
    if ($value["weight"] > 10) {
        echo "Shipping cost for " . $value["weight"] . "  kg's of  ". $fruit .  " is 2 €" . PHP_EOL;
    } else {
        echo "Shipping cost for " . $value["weight"] . "  kg's of  ". $fruit .  " is 1 €" . PHP_EOL;
    }
}