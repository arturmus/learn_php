<?php

// массив с foreach
 
 $array = [1, 2, 3];
 $result = [];
 
 $last = count($array) - 1;
 
 foreach($array as $i => $value) {
     
     $result[$last - $i] = $value;
 }
 
 print_r ($result);
 
 // массив с pop
 
 $array = [1, 2, 3];
 $result = [];
 
 $last = count ($array) - 1;
 for ($i=0; $i <= $last; $i++) {
     
     $resalt = array_pop ($array);
 }
 
 print_r ($result);
