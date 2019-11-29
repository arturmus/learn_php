<?php

function fio(string $lastname, string $name, ?string $fartherName = null): string
{
    if ($fartherName === null) {
        return $lastname . ' ' . $name;
    }
    
    return $lastname . ' ' . $name . ' ' . $fartherName;
}

echo fio('Семенов', 'Михаил', 'Иванович'), PHP_EOL,  fio('Gates', 'Bill');
