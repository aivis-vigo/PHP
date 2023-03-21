<?php

$persons = [
    [
        "name" => "Jake",
        "age" => 35
    ],

    [
        "name" => "Mike",
        "age" => 17
    ],

    [
        "name" => "Robert",
        "age" => 27
    ]
];

foreach ($persons as $person) {
    if ($person["age"] < 18) {
        echo $person["name"] . " hasn't reached age of 18 yet!" . PHP_EOL;
    } else {
        echo $person["name"] . " has reached age of 18 and currently is " . $person["age"] . " years old!" . PHP_EOL;
    }
}