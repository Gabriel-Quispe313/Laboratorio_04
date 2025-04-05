<?php
// Definimos una cadena con caracteres específicos al final
$cadena = "Hola, mundo!!!";

// Usamos chop() para eliminar caracteres al final
$cadena_chop = chop($cadena, "!"); // Debería devolver "Hola, mundo"

// Usamos trim() para eliminar espacios en blanco al inicio y al final
$cadena_trim = trim($cadena); // Debería devolver "Hola, mundo!!!"

// Mostramos los resultados
echo "Cadena original: '$cadena'\n"; 
echo "Después de chop(): '$cadena_chop'\n"; 
echo "Después de trim(): '$cadena_trim'\n"; 
?>