<?php
// Definimos algunos números
$numero1 = 10;
$numero2 = 25;
$numero3 = 15;

// Usamos max() para encontrar el valor máximo
$maximo_dos = max($numero1, $numero2); // entre dos números
$maximo_tres = max($numero1, $numero2, $numero3); // entre tres números

// Mostramos los resultados
echo "El máximo entre $numero1 y $numero2 es: $maximo_dos\n"; 
echo "El máximo entre $numero1, $numero2 y $numero3 es: $maximo_tres\n"; 
?>