<?php
        
function reverse($str) {
    
    $length = strlen($str);
    $inversed = '';
    for ($i = $length - 1; $i >= 0; $i--) {
         $inversed = $inversed . substr($str, $i, 1) . " ";
    }
    $inversed = substr($inversed, 0 , -1);
    return  $inversed;
}
function testReverse()
{
    $x = reverse('sky');
    
    if ($x === 'y k s') {
        echo 'testReverse ... OK';
    } else {
        echo 'testReverse failed',PHP_EOL;
    }
}
testReverse();
