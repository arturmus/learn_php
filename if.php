<?php

$a = 2;

if ($a > -5 && $a <=0) {
    $a = 100;
} else if ($a > 0 && $a <= 5) {
    $a = 200;
} else if ($a > 5 && $a <= 10) {
    $a = 300;
} else {
    $a = 400;
}

echo $a;
