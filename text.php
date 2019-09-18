<?php

$str = 'GOD IS LOVE !';
$length = strlen($str);
for ($i = 0; $i < $length; $i++) {
    echo $i, ' ', substr($str, $i, 1), PHP_EOL;
}

echo 'END', PHP_EOL;


$str = 'GOD IS LOVE !';
$length = strlen($str);

$str = 'GOD IS LOVE !';
$length = strlen($str);
for ($i = $length; $i >= 0; $i--) {
    echo $i, ' ', substr($str, $i, 1), PHP_EOL;
}
echo 'END';
