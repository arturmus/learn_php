<?php
  
 $x = time() / (365*24*60*60 + 6*60*60) + 1970;

    var_damp(round ($x , 0));
     echo 'Year: '. $x . PHP_EOL;
     
     $y = time() / (24*60*60);
     
     echo 'Day:' . $y . PHP_EOL;
