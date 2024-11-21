<?php

$numeros = [1, 15, 39, 75, 92];


$diferencia = 53;

echo "Array de números: " . implode(", ", $numeros) . "\n";
echo "Diferencia buscada: $diferencia\n\n";

// Encontrar los pares que cumplen la condición
$pares = [];
foreach ($numeros as $i => $num1) {
    foreach ($numeros as $j => $num2) {
        if ($i !== $j && abs($num1 - $num2) === $diferencia) {
            $pares[] = "($num1, $num2)";
        }
    }
}

// Eliminar pares duplicados 
$pares = array_unique($pares);

// Mostrar los pares encontrados
if (!empty($pares)) {
    echo "Pares encontrados:\n" . implode("\n", $pares) . "\n";
} else {
    echo "No se encontraron pares con la diferencia de $diferencia.\n";
}
?>
