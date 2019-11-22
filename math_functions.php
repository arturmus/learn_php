<?php

function sum(array $numbers): int {
    $sum = 0;
    
    foreach ($numbers as $number) {
        $sum += $number;
    }
    
    return $sum;
}

function average(array $numbers): float {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }
    
    return $sum / count($numbers);
}

$data = [30, 18, 44];
echo sum($data), PHP_EOL;

echo average([2, 4, 6]);
