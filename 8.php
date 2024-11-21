<?php
// Array bidimensional original
$matriz = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4]
];

echo "Matriz original:\n";
foreach ($matriz as $fila) {
    echo "[ " . implode(", ", $fila) . " ]\n";
}

// Matriz transpuesta
$transpuesta = [];

// Recorremos la matriz original
foreach ($matriz as $filaIndex => $fila) {
    foreach ($fila as $colIndex => $valor) {
        // Asignamos cada valor a la posición transpuesta
        $transpuesta[$colIndex][$filaIndex] = $valor;
    }
}

// Mostrar la matriz transpuesta
echo "\nMatriz transpuesta:\n";
foreach ($transpuesta as $fila) {
    echo "[ " . implode(", ", $fila) . " ]\n";
}
?>
