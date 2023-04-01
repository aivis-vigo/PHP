<?php declare(strict_types=1);

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$input = (int) readline("Enter the value to search for: ");

//todo check if an array contains a value user entered
return (in_array($input, $numbers)) ? "Found" : "Not found";