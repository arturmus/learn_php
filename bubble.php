<?php

$array = array(25, 8, 3, 14);

for ($j = 0; $j < count($array) - 1; $j++) {
    
    for ($i = 0; $i < count($array) - 1 -$j; $i++) {
        
        if ($array [i] > $array[i + 1]) {
            
            $bubble = $array [$i + 1];
            $array[$i + 1] = $array[$i];
            $array [$i] = $bubble;
        }
    }
}

var_dump ($array);
