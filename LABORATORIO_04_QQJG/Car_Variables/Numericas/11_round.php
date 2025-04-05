<?php
// Definimos un número con decimales
$numero = 3.14159;

// Redondeamos el número a 2 decimales
$redondeado_dos_decimales = round($numero, 2);

// Redondeamos el número a 0 decimales (entero)
$redondeado_entero = round($numero);

// Mostramos los resultados
echo "El número original es: $numero\n"; 
echo "El número redondeado a 2 decimales es: $redondeado_dos_decimales\n"; 
echo "El número redondeado a 0 decimales (entero) es: $redondeado_entero\n"; 
?>