<?php

$numeros=[1,2,3,4,3,2,5,6,7,4,8,9];
var_dump($numeros);
 
$repetidos=[];
$vistos=[];

foreach ($numeros as $numero) {
    // Verificamos si el número ya está en el array de vistos
    if (in_array($numero, $vistos)) {
        // Si ya está en "vistos" y no está aún en "repetidos", lo añadimos
        if (!in_array($numero, $repetidos)) {
            $repetidos[] = $numero;
        }
    } else {
        // Si no está en "vistos", lo añadimos
        $vistos[] = $numero;
    }
}

var_dump ($repetidos);