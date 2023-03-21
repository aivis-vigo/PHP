<?php

$persons = [
    [
        [
            'name' => 'Jake',
            'surname' => 'Hill',
            'age' => 21,
            'birthday' => '24/03/1998'
        ],

        [
            'name' => 'Mike',
            'surname' => 'Rock',
            'age' => 23,
            'birthday' => '12/02/2001'
        ],

        [
            'name' => 'Bob',
            'surname' => 'Bird',
            'age' => 32,
            'birthday' => '31/01/2012'
        ],
    ]
];

foreach ($persons as $person) {
    for ($i = 0; $i < count($person); $i++) {
        echo $person[$i]['name'] . ' ' . $person[$i]['surname'] . ' is ' . $person[$i]['age'] . " years old & this person's birthday is : " . $person[$i]['birthday'] . PHP_EOL;
    }
}