<?php

//Ejecuta el código por lo menos una vez

$usernames = ["Francisco", "Javier", "Luis"];
$exit = false;

do {
    $username = readline("Ingresa tu nombre de usuario: ");

    echo (in_array($username,$usernames)) ? "Este usuario ya existe \n" : "Usuario agregado \n";

    
} while (in_array($username,$usernames));