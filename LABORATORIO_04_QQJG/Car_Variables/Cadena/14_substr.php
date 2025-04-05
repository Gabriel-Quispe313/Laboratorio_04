<?php
// Definimos una cadena
$cadena = "Hola, mundo. Bienvenido a PHP.";

// Extraemos varias subcadenas
$subcadena1 = substr($cadena, 0, 5);     // Debe devolver "Hola,"
$subcadena2 = substr($cadena, 7, 5);     // Debe devolver "mundo"
$subcadena3 = substr($cadena, 15);       // Debe devolver "Bienvenido a PHP."
$subcadena4 = substr($cadena, -4);       // Debe devolver "PHP."

// Mostramos los resultados
echo "Subcadena desde posición 0 con longitud 5: '$subcadena1'\n"; 
echo "Subcadena desde posición 7 con longitud 5: '$subcadena2'\n"; 
echo "Subcadena desde posición 15 hasta el final: '$subcadena3'\n"; 
echo "Subcadena de los últimos 4 caracteres: '$subcadena4'\n"; 
?>