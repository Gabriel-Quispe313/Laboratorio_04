<?php
// Definimos una cadena
$cadena = "Hola";

// Usamos str_pad() para rellenar la cadena a una longitud de 10 caracteres con espacios
$cadena_rellenada = str_pad($cadena, 10);

// Mostramos los resultados
echo "Cadena original: '$cadena'\n"; 
echo "Cadena rellenada: '$cadena_rellenada'\n"; 
?>