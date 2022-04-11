<?php

$users = array(

    array(
        "nombre"    => "Carlos",
        "ocupacion" => "Doctor",
        "edad"      => "35",
        "comidas"   => array(
            "favoritas" => "Sushi, Tacos, Milanesa",
            "no_favoritas" => "Arroz, Pizza, Papas",
        )
    ),

    array(
        "nombre"    => "Roberto",
        "ocupacion" => "Desarrollador",
        "edad"      => "25",
        "comidas"   => array(
            "favoritas" => "Pizza, Pastes, Bisteck",
            "no_favoritas" => "Arroz",
        )
    )
    
);

$carlos = $users[0];

echo "El usuario : " . $carlos['nombre'] . "\n" .
    "quien se desarrolla como " . $carlos['ocupacion'] . "\n" .
    "y tiene una edad de " . $carlos['edad']. " años \n" . 
    "sus comidad favoritas son: " . $carlos['comidas']['favoritas'] . "\n";


    

