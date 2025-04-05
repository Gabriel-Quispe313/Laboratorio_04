<?php
// Generamos un número aleatorio entre 1 y 100
$numero_aleatorio = mt_rand(1, 100);

// Mostramos el número aleatorio generado
echo "Un número aleatorio generado entre 1 y 100 es: $numero_aleatorio\n"; 

// También podemos generar un número aleatorio sin parámetros, que irá entre 0 y getrandmax()
$numero_aleatorio_sin_parametros = mt_rand();

// Mostramos el número aleatorio generado sin parámetros
echo "Un número aleatorio generado entre 0 y " . getrandmax() . " es: $numero_aleatorio_sin_parametros\n"; 
?>