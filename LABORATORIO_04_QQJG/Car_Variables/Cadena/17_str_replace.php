<?php
// Definimos una cadena original
$cadena = "Hola, mundo. Bienvenido al mundo de PHP.";

// Usamos str_replace() para reemplazar "mundo" por "universo"
$cadena_reemplazada = str_replace("mundo", "universo", $cadena);

// Mostramos los resultados
echo "Cadena original: '$cadena'\n"; 
echo "Cadena después del reemplazo: '$cadena_reemplazada'\n"; 
?>