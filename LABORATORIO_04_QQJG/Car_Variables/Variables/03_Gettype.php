<?php
// Definimos diferentes tipos de variables
$numero = 10; // entero
$texto = "Hola, mundo"; // cadena
$decimal = 3.14; // flotante
$booleano = true; // booleano
$array = array(1, 2, 3); // array

// Usamos gettype para obtener el tipo de cada variable
echo "El tipo de \$numero es: " . gettype($numero) . "\n"; // integer
echo "El tipo de \$texto es: " . gettype($texto) . "\n"; // string
echo "El tipo de \$decimal es: " . gettype($decimal) . "\n"; // double
echo "El tipo de \$booleano es: " . gettype($booleano) . "\n"; // boolean
echo "El tipo de \$array es: " . gettype($array) . "\n"; // array
?>