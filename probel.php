<?php
         
function addSpace($str) {
    
    $length = strlen($str);
    $text = '';
    
    for ($i = 0; $i < $length; $i++) {
         $text = $text . substr($str, $i, 1) . ' ';
    }
    
    return  substr($text, 0, -1);
}

function testAddSpace()
{
    $x = addSpace('sky');
    
    if ($x === 's k y') {
        echo 'testAddSpace ... OK';
    } else {
        echo 'testAddSpace failed',PHP_EOL;
    }
}

testAddSpace();
