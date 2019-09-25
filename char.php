<?php
         
function addChar($str, $char) {
    
    $length = strlen($str);
    $text = '';
    
    for ($i = 0; $i < $length; $i++) {
         $text = $text . substr($str, $i, 1) . $char;
    }
    
    return  substr($text, 0, -1);
}

function testAddChar()
{
    $c = '*';
    $x = addChar('sky', $c);
    
    if ($x === "s{$c}k{$c}y") {
        echo 'testAddChar ... OK';
    } else {
        echo 'testAddChare failed',PHP_EOL;
    }
}

testAddChar();
