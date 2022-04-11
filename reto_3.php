<?php

$shop_end   = readline("¿A qué tienda deseas llegar? ");
$before        = 0;
$current      = 1;

//Serie de Fibonacci
for ($i=2; $i <= $shop_end; $i++) {
    $aux = $current; //Valor actual
    $current += $before;
    echo "$current \n";
    $before = $aux;
}

echo "los caminos disponibles para llegar a tú destino son $current \n";