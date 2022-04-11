<?php

$donaciones = readline("Por favor ingresa la cantidad de donaciones acumuladas: ");


if($donaciones >= 1000)
    echo "Puedes retirar tus donaciones, por un total de $donaciones \n";
else
    echo "lo sentimos, no cumples con la cantidad minima de 1000 DLS \n";