<?php
  
 
  $x = time() / (365*24*60*60 + 6*60*60) + 1970;

 
     echo 'Year: '.  floor($x) . PHP_EOL;
     
     $y = time() / (24*60*60);
     
     echo 'Day:' . floor($y) . PHP_EOL;
