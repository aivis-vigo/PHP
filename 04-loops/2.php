<?php

$numbers = [
    31,
    22,
    31,
    47,
    54,
    68,
    79,
    18,
    92,
    100
];

sort($numbers);

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . ' ';
}
