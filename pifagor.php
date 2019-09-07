<?php

// вычислить гипотенузу по 2 катетам
$katet1 = 0.2;
$katet2 = 0.1;
$hipotenuza = sqrt(pow($katet1, 2) + pow($katet2, 2));

echo 'Katet #1: ' . $katet1 . "\n";
echo "Katet #2: $katet2" . PHP_EOL;
printf('Hipotenuza: %.3f', $hipotenuza);
