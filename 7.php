<?php

$numeros = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];
echo "Array original: " . implode(", ", $numeros) . "\n";


$sinCeros = [];
$ceros = [];

// Recorremos 
foreach ($numeros as $numero) {
    if ($numero === 0) {
        // Si es 0, lo añadimos al array de ceros
        $ceros[] = $numero;
    } else {
        // Si no es 0, lo añadimos al array de valores no cero
        $sinCeros[] = $numero;
    }
}

// Unimos los valores no cero con los ceros
$resultado = array_merge($sinCeros, $ceros);

// Mostramos el resultado
echo "Array con ceros al final: " . implode(", ", $resultado) . "\n";
?>
