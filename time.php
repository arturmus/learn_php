<?php
  
  $a = time() / (365*24*60*60 + 12*24*60*60);
  $x = time() / (365*24*60*60) + 1970;
    
     echo 'Year: '. $x . PHP_EOL;
     
     $y = time() / (24*60*60);
     
     echo 'Day:' . $y . PHP_EOL;
