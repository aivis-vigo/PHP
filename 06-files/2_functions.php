<?php

function checkAge(string $name, int $age)
{
    if ($age >= 18)
    {
        echo "$name is $age years old, so he's old enough to drive.";
    } else {
        echo "$name is $age years old, so he isn't old enough to drive.";
    }
}

function checkWeight(string $name, int $weight)
{
    if ($weight > 100)
    {
        echo "$name is heavy.";
    } else {
        echo "$name is light.";
    }
}