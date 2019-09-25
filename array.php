<?php

        
// это строка
$str = 'abc';

echo $str[2];

// это массив
$a = array(1,34,'mama',89);

echo 'length=',count($a), PHP_EOL;

for ($i=0; $i < count($a); $i++) {
    echo $a[$i], PHP_EOL;
}

// это цикл для массивов
foreach ([2,3,5] as $value) {
     echo $value, PHP_EOL;
}
