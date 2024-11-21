<?php

// Modifica el script anterior
 //en vez de crear dos arrays, los números pares se almacenen en la fila 0 de un array bi-dimensional, 
 //y los impares en la fila 1 del mismo array. 

 //Almacena inicialmente los números en un array uni-dimensional y haz la separación a posteriori.


 // Array de valores inicial (puedes modificarlo para tus pruebas)
$valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump($valores);

$valores2= [
    [],
    []
]; //array bidimensional



// Recorremos el array principal
foreach ($valores as $valor) {
    // Usamos el operador módulo (%) para determinar si el número es par o impar
    if ($valor % 2 == 0) { //el 0 es el resíduo de una división, si el número entre 2 da un número entero, es par
        $valores2[0][] = $valor; // Si es par, lo agregamos al array de pares
        
    } else {
        $valores2[1][] = $valor; // Si es impar, lo agregamos al array de impares
    }
}

var_dump($valores2);

echo "Valores pares:";
echo implode(", ", ($valores2[0])); // Usamos implode para mostrar los pares separados por comas

echo "Valores impares:";
echo implode(", ", ($valores2[1])); // Usamos implode para mostrar los impares separados por comas
?>




