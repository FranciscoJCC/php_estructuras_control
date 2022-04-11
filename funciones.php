<?php

function get_pokemon(){

    $number = rand(1,4);

    switch ($number) {
        case '1':
            echo "Pikachu \n";
            break;

        case '2':
            echo "Charmander \n";
            break;

        case '3':
            echo "Newto \n";
            break;
        
        default:
            echo "Lo siento no hay pókemon \n";
            break;
    }
}


for ($i=0; $i < 20; $i++) { 
    echo get_pokemon();
}

echo "\n";

function is_student_legend($platzi_rank){
    if($platzi_rank >= 20000)
        echo "Eres un estudiante legend \n";
    else
        echo "Aun no tiene el nivel necesario \n";
}


for ($i=0; $i < 20; $i++) { 
    echo is_student_legend(rand(10000,30000));
}
echo "\n";

/* Solicitando al usuario */
do {
    # code...
    $points = (int) readline("Ingresa tus puntos de platzi: ");
    is_student_legend($points);
} while (false); //true , infinito



//Parametros con valor por defecto 

function suma($a = 0, $b = 0){
    echo "La suma es: " . ($a + $b) . "\n";
}

suma(10);
echo "\n";


$array1 = [1,4];
$array2 = [3,4,2];

$result = [...$array1, ...$array2];

print_r($result);

function suma_array($a = 0, $b = 0){
    echo "La suma es: " . ($a + $b) . "\n";
}

//Array unpacking
suma_array(...$array1);


//Parametros dinamicos
function suma_dinamica(...$params){
    $total = 0;
    foreach ($params as $number) {
        $total += $number;
    }

    echo "La suma de los números es: " . $total . "\n";
}

suma_dinamica(100,50,50,20,40,4);
suma_dinamica(100,20,40,4);


