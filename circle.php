<?php

//длина круга
$r = 5;
$L = M_PI * $r * 2;
echo 'radius: '. $r . PHP_EOL;
printf("dlina: %.3f\n" , $L);

//площадь круга
$S = M_PI * pow($r, 2);
printf('square: %.3f' , $S);
