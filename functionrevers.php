<?php
  
//function with foreach
  function revers(array $input) {
      
     
      $last = count($input) - 1;
      
      foreach($input as $i => $value) {
     
     $result[$last - $i] = $value;
 }
 
 return $result;
 
  }
  
  $input = [25, 76, 99];

$a = revers($input);

  var_dump($a);
 
   // function with pop
 
 function revers(array $input) {
     
     $last = count($input) - 1;
     for ($i = 0; $i <= $last; $i++) {
         
         $result = array_pop ($input);
     }
     
     return $result;
 }
 
 $input = [25, 76, 99];

$a = revers($input);

  var_dump($a);
