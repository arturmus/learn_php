<?php

$price = 88.875;

// 1) двойная кавычка - подстановка числа
echo "Notebook $price USD";

// 2) конкатенация или слияние, одинарная кавычка и точки
echo 'Notebook ' . $price . ' USD';

// 3) форматирование и вывод
$productName = sprintf('Notebook %.1f (USD)', $price); ;
echo $productName;

// форматирование и вывод одной командой
printf('Notebook %.1f (USD)', $price);

// "\n" - перенос строки и 
printf("hhh %.2f\nfjlskfsl\nslkslfls\n", 6);
echo 'xxx';

// перенос строки
echo 'Hello', PHP_EOL;
