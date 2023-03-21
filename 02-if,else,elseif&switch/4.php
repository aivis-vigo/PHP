<?php

$valueCheck = intval(readline('Value to check : '));
$inputX = intval(readline('Enter int x : '));
$inputY = intval(readline('Enter int y : '));

if($valueCheck > $inputX && $valueCheck > $inputY) {
    echo "$valueCheck is the biggest number";
} elseif($valueCheck < $inputX && $valueCheck > $inputY) {
    echo "$inputX is the biggest number";
} elseif($valueCheck > $inputX && $valueCheck < $inputY) {
    echo "$inputY is the biggest number";
} elseif($valueCheck === $inputX && $valueCheck=== $inputY) {
    echo 'All numbers are equal';
}

