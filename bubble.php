<?php

$massiv = array(25, 8, 3, 14);

foreach($massiv as $key => $item) {
    
    if($item > $massiv[$key + 1]) {
        $tmp = $massiv[$key + 1];
        $massiv[$key] = $tmp;
        $massiv[$key + 1] = $item;
    }
}

var_dump($massiv);
