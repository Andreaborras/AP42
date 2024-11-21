<?php
// Array de valores inicial (puedes modificarlo para tus pruebas)
$valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump($valores);

// Arrays para almacenar pares e impares
$pares = [];
$impares = [];

// Recorremos el array principal
foreach ($valores as $valor) {
    // Usamos el operador módulo (%) para determinar si el número es par o impar
    if ($valor % 2 == 0) { //el 0 es el resíduo de una división, si el número entre 2 da un número entero, es par
        $pares[] = $valor; // Si es par, lo agregamos al array de pares
    } else {
        $impares[] = $valor; // Si es impar, lo agregamos al array de impares
    }
}

// Mostrar los resultados
echo "Valores pares:";
echo implode(", ", $pares); // Usamos implode para mostrar los pares separados por comas

echo "Valores impares:";
echo implode(", ", $impares); // Usamos implode para mostrar los impares separados por comas
?>
