<?php

$prices_coffes = [12,326,32,258,2,68,25,36,42,8];

//Ordenar array, modificando el original
usort($prices_coffes, function($a, $b){
    return $a <=> $b;
});

print_r($prices_coffes);

//<=> compara dos números, retorna -1 , 0 o 1