<?php

function sum($a, $b) {
    
    return $a + $b;

}

function sub($a, $b) {
    
    return $a-$b;
}

function div($a, $b) {
    
    return $a/$b;
}

function mult($a, $b) {
    
    return $a*$b;
}

$a = 123;
$b = 327;

$x = sum($a, $b);
$y = sub($a, $b);
$z = div($a, $b);
$t = mult($a, $b);

echo 'sum', ' ', $x, PHP_EOL;
echo 'sub', ' ', $y, PHP_EOL;
echo 'div', ' ', $z, PHP_EOL;
echo 'mult', ' ', $t;
