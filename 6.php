<?php

//Haz un array con 10 notas. A continuación, 
//elimina la nota mas baja y la más alta (solo una, en caso de estar repetida). 
//Haz la media de las que quedan. Puedes comprobar si los datos són numéricos con la función is_numeric.
// Además puedes usar también array_splice y implode si te son útiles.



$notas = [7, 9, 5, 10, 8, 6, 4, 3, 8, 9];
echo "Notas iniciales: " . implode(", ", $notas) . "\n";

// Verificamos que todos los valores sean numéricos
foreach ($notas as $nota) {
    if (!is_numeric($nota)) {
        die("Error: Todos los valores deben ser numéricos.");
    }
}

// Encontramos la nota más baja y más alta
$notaMasBaja = min($notas);
$notaMasAlta = max($notas);

// Eliminamos la nota más baja (solo una vez)
$claveBaja = array_search($notaMasBaja, $notas); // Encontramos el índice
if ($claveBaja !== false) {
    array_splice($notas, $claveBaja, 1); // Eliminamos ese elemento
}

// Eliminamos la nota más alta (solo una vez)
$claveAlta = array_search($notaMasAlta, $notas); // Encontramos el índice
if ($claveAlta !== false) {
    array_splice($notas, $claveAlta, 1); // Eliminamos ese elemento
}

// Calculamos la media de las notas restantes
$suma = array_sum($notas);
$contador = count($notas);
$media = $contador > 0 ? $suma / $contador : 0;

// Mostramos resultados
echo "Notas después de eliminar la más baja y la más alta: " . implode(", ", $notas) . "\n";
echo "Nota más baja eliminada: $notaMasBaja\n";
echo "Nota más alta eliminada: $notaMasAlta\n";
echo "Media de las notas restantes: $media\n";
?>
