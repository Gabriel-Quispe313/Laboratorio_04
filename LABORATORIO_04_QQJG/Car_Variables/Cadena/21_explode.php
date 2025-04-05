<?php
// Definimos una cadena con elementos separados por comas
$cadena = "manzana,plátano,cereza,naranja";

// Usamos explode() para dividir la cadena en un array
$frutas = explode(",", $cadena);

// Mostramos los resultados
echo "Cadena original: '$cadena'\n"; 
echo "Array de frutas:\n";
print_r($frutas);
?>