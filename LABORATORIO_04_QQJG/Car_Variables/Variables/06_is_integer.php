<?php
// Definimos varias variables
$var1 = 10;          // entero
$var2 = 3.14;        // flotante
$var3 = "20";        // cadena que representa un número
$var4 = 0;           // entero
$var5 = null;        // nulo

// Usamos is_integer para comprobar si las variables son enteros
echo "¿\$var1 es un entero? " . (is_integer($var1) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var2 es un entero? " . (is_integer($var2) ? "Sí" : "No") . "\n"; // No
echo "¿\$var3 es un entero? " . (is_integer($var3) ? "Sí" : "No") . "\n"; // No
echo "¿\$var4 es un entero? " . (is_integer($var4) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var5 es un entero? " . (is_integer($var5) ? "Sí" : "No") . "\n"; // No
?>