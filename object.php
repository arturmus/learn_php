<?php
        
// это объект
$person = new stdClass();

$person->name = 'Jack';
$person->age = 28;
$person->sex = 'M';


echo $person->name, $person->age * 2, PHP_EOL;

var_dump($person);
