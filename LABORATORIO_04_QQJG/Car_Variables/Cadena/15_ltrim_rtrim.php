<?php
// Definimos una cadena con espacios en blanco al inicio y al final
$cadena = "   Hola, mundo. Bienvenido a PHP.   ";

// Usamos ltrim() para eliminar espacios al inicio
$cadena_ltrim = ltrim($cadena); // Debería devolver "Hola, mundo. Bienvenido a PHP.   "

// Usamos rtrim() para eliminar espacios al final
$cadena_rtrim = rtrim($cadena); // Debería devolver "   Hola, mundo. Bienvenido a PHP."

// Usamos ambos, ltrim() y rtrim(), para eliminar espacios en ambos extremos
$cadena_trim = trim($cadena); // Debería devolver "Hola, mundo. Bienvenido a PHP."

// Mostramos los resultados
echo "Cadena original: '$cadena'\n"; 
echo "Después de ltrim(): '$cadena_ltrim'\n"; 
echo "Después de rtrim(): '$cadena_rtrim'\n"; 
echo "Después de trim(): '$cadena_trim'\n"; 
?>