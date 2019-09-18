<?php

function reverse($str) {
    
   $length = strlen($str);
   $inversed = '';
   for ($i = 1; $i <= $length; $i++) {
       $inversed .= substr($str, -1 * $i, 1);
   }
   
   return $inversed;
}


function testReverse()
{
    $x = reverse('allo');
    
    if ($x === 'olla') {
        echo 'testReverse ... OK';
    } else {
        echo 'testReverse failed',PHP_EOL;
    }
}

testReverse();
