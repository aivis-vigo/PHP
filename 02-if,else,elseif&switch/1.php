<?php

$num = 10;
$stringNum = '10';

if ($num === $stringNum) {
    echo 'Same' . PHP_EOL;
} else {
    echo 'Not Same' . PHP_EOL;
}

var_dump($num === $stringNum);