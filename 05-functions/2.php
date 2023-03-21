<?php

function multiply($base, $multiplyWith) {
    if (is_int($base) && is_int($multiplyWith)) {
        echo "$base + $multiplyWith = " . ($base * $multiplyWith);
    } else {
        echo "You need to enter integers!";
    }
}

multiply(6, 5);

