<?php

//ARRAYS ASOCIATIVOS

$ages = [
    "Carlos" => 18, 
    "Juan" => 25,
    "Roberto" => 50,
];

echo "La edad de Carlos es: " . $ages['Carlos'];
echo "\n";


$cafes = [
    "Capuccino" => 50,
    "Latte"     => 40,
    "Americano" => 70,
];

echo "El precio del café americano es de: {$cafes['Americano']}";
echo "\n";



$usuarios = [
    "Carlos" => [
        "edad" => 20,
        "apellido" => "Santana",
        "direccion" => [
            "calle"       => "Av. Lázaro Cardenas",
            "no_interior" => "3",
            "no_exterior" => "3334",
            "colonia"     => "Díaz",
        ],
    ],
    "Roberto" => [
        "edad" => 30,
        "apellido" => "Díaz",
        "direccion" => [
            "calle"       => "Av. Principal",
            "no_interior" => "34",
            "no_exterior" => "3244",
            "colonia"     => "Centro",
        ],
    ],
    "Diego" => [
        "edad" => 50,
        "apellido" => "López",
        "direccion" => [
            "calle"       => "Av. 16 de septiembre",
            "no_interior" => "34",
            "no_exterior" => "3453",
            "colonia"     => "Polanco",
        ],
    ],
];

echo "La información de Diego es: \n
    Edad: {$usuarios['Diego']['edad']} \n 
    Apellido: {$usuarios['Diego']['apellido']} \n
    Colonia: {$usuarios['Diego']['direccion']['colonia']}";

echo "\n";
