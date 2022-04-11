<?php


$shop = array(
    "Americano" => 20,
    "Late" => 30,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 23,
);

foreach ($shop as $price)
    echo "El café en cuestion cuesta $$price USD \n";


echo "\n";

foreach ($shop as $coffe => $price)
    echo "El café $coffe cuesta $$price USD \n";

echo "\n";

//Buscar
foreach ($shop as $coffe => $price) {
   if($coffe == "Late"){
       echo "Encontramos el Late\n";
       break;
   }
}

echo "\n";
//
foreach ($shop as $coffe => $price) {
    if($price <= 10)
        echo "El café $coffe no está tan rico\n";
    else
        echo "El café $coffe esta rico, y cuesta $price \n";  
}


echo "\n";

//Omite resultados 
foreach ($shop as $coffe => $price) {
    if($coffe == "Recalentado")
        continue;
    
    echo "El café $coffe esta rico, y cuesta $price \n";  
}
 
 