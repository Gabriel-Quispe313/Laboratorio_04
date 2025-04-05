<?php
// Definimos una variable como entero
$numero = 10;
echo "Antes de settype: " . gettype($numero) . "\n"; // integer

// Cambiamos el tipo de la variable a string
settype($numero, "string");
echo "Después de settype: " . gettype($numero) . "\n"; // string
echo "Valor de \$numero: " . $numero . "\n"; // 10 (ahora es una cadena)
?>