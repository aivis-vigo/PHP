<?php declare(strict_types=1);

$xf = 0;
$x0 = 0;
$v0 = 10;
$g = 9.81;
$t = 0;

for ($x = 0; $x < $v0; $x++) {
    $xf = $x0 + $v0*$t + (0.5)*$g*pow($t, 2);
    $t++;
}


echo "The final displacement is: -" . round($xf, 1) . " m";