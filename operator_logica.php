<?php

$x = 10;
$y = 4;

#in Operator Logica always use %%(and), ||(or), !=(not),xor

$true_ok = $x == 10 && $y == 4;
echo $true_ok.PHP_EOL;
$true_or = $x == 10 || $y == 4;
echo $true_or.PHP_EOL;
$false_not = $x != 10 && $y != 4;
echo $false_not.PHP_EOL;