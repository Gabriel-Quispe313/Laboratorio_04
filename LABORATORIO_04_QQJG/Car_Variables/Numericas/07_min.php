<?php
// Definimos algunos números
$numero1 = 42;
$numero2 = 15;
$numero3 = 28;

// Usamos min() para encontrar el valor mínimo
$minimo_dos = min($numero1, $numero2); // entre dos números
$minimo_tres = min($numero1, $numero2, $numero3); // entre tres números

// Mostramos los resultados
echo "El mínimo entre $numero1 y $numero2 es: $minimo_dos\n"; 
echo "El mínimo entre $numero1, $numero2 y $numero3 es: $minimo_tres\n"; 
?>