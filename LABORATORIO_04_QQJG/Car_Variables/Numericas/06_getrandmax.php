<?php
// Obtenemos el valor máximo que puede devolver rand()
$maximo = getrandmax();

// Mostramos el valor máximo
echo "El valor máximo que puede devolver rand() es: $maximo\n";

// Generamos un número aleatorio entre 0 y el valor máximo
$numero_aleatorio = rand(0, $maximo);

// Mostramos el número aleatorio generado
echo "Un número aleatorio generado entre 0 y $maximo es: $numero_aleatorio\n"; 
?>