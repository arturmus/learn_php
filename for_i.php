<?php

$str = 'mama papa !';
$length = strlen($str);

for ($i = 0; $i < $length; $i++) {
    echo $i, ' ', substr($str, $i, 1), PHP_EOL;
}

echo 'END';
