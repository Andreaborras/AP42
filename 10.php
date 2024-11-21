<?php

$numeros = [1, 3, 3, 8, 4, 3, 2, 3, 3];


echo "Array original: " . implode(", ", $numeros) . "\n\n";

// Calcular la suma total del array
$sumaTotal = array_sum($numeros);

// Verificar que la suma total es divisible por 2 (premisa: el array cumple)
if ($sumaTotal % 2 !== 0) {
    die("Error: El array no se puede dividir en dos partes iguales.\n");
}

$sumaObjetivo = $sumaTotal / 2;
$sumaActual = 0;
$array1 = [];
$array2 = [];

// Recorremos el array y dividimos en dos partes
foreach ($numeros as $numero) {
    if ($sumaActual + $numero <= $sumaObjetivo) {
        $array1[] = $numero;
        $sumaActual += $numero;
    } else {
        $array2[] = $numero;
    }
}

// Mostrar los resultados
echo "Parte 1: [" . implode(", ", $array1) . "] = " . array_sum($array1) . "\n";
echo "Parte 2: [" . implode(", ", $array2) . "] = " . array_sum($array2) . "\n";
?>
