<?php
// Definimos una cadena
$cadena = "Hola, mundo. Bienvenido a PHP.";

// Buscamos la posición de varias subcadenas
$pos1 = strpos($cadena, "mundo");      // Debería devolver 7
$pos2 = strpos($cadena, "Bienvenido");  // Debería devolver 15
$pos3 = strpos($cadena, "PHP");         // Debería devolver 25
$pos4 = strpos($cadena, "adiós");       // No se encuentra, debería devolver false

// Mostramos los resultados
echo "La posición de 'mundo' es: " . ($pos1 !== false ? $pos1 : "No encontrado") . "\n"; 
echo "La posición de 'Bienvenido' es: " . ($pos2 !== false ? $pos2 : "No encontrado") . "\n"; 
echo "La posición de 'PHP' es: " . ($pos3 !== false ? $pos3 : "No encontrado") . "\n"; 
echo "La posición de 'adiós' es: " . ($pos4 !== false ? $pos4 : "No encontrado") . "\n"; 
?>