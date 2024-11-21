<?php
// Array de valores inicial (puedes cambiarlo con tus propios datos)
$valores = [1, 2, 3, 4, 5, 2, 3, 6, 7, 8, 8, 9];
var_dump($valores);
$duplicados = [];
$verificados = [];

// Recorrer el array de valores
for ($i = 0; $i < count($valores); $i++) {
    $actual = $valores[$i];
    $esDuplicado = false;

    // Revisar si ya se verificó este valor
    for ($j = 0; $j < count($verificados); $j++) {
        if ($verificados[$j] == $actual) {
            $esDuplicado = true;
            break;
        }
    }

    if (!$esDuplicado) {
        // Comparar el valor actual con el resto del array
        for ($k = $i + 1; $k < count($valores); $k++) {
            if ($actual == $valores[$k]) {
                $duplicados[] = $actual; // Agregar a duplicados si se encuentra
                break;
            }
        }
        $verificados[] = $actual; // Marcar como verificado
    }
}

// Mostrar los duplicados encontrados
echo "Valores duplicados:\n";
if (count($duplicados) > 0) {
    foreach ($duplicados as $duplicado) {
        echo $duplicado . "\n";
    }
} else {
    echo "No se encontraron duplicados.\n";
}
?>
