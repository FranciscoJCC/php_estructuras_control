<?php

$edades = [18,22,40,50];

//Contar elementos
echo count($edades) . "\n";

//Agregar elemento al final
array_push($edades,101);
print_r($edades);

//Validar si es arreglo o no 
$esto_no_es_array = "";

var_dump(is_array($esto_no_es_array));
var_dump(is_array($edades));

// Convertir un string a un array por un identificador
$lista_frutas = "fresa,cereza,uva,mandarina";
$array_frutas = explode(',',$lista_frutas);
print_r($array_frutas);

//Covertir un array a string 
$array_frutas2 = ["fresa,cereza","uva","mandarina"];
$list_frustas2 = implode(",",$array_frutas2) . "\n";
print_r($list_frustas2);


echo "\n";