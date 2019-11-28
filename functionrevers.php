<?php
  
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
 
  
