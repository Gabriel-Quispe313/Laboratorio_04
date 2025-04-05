<?php
// Definimos varias variables
$var1 = "Hola, mundo"; // cadena
$var2 = 123;           // entero
$var3 = 45.67;         // flotante
$var4 = true;          // booleano
$var5 = "123";         // cadena que parece un número

// Usamos is_string para comprobar si las variables son cadenas
echo "¿\$var1 es una cadena? " . (is_string($var1) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var2 es una cadena? " . (is_string($var2) ? "Sí" : "No") . "\n"; // No
echo "¿\$var3 es una cadena? " . (is_string($var3) ? "Sí" : "No") . "\n"; // No
echo "¿\$var4 es una cadena? " . (is_string($var4) ? "Sí" : "No") . "\n"; // No
echo "¿\$var5 es una cadena? " . (is_string($var5) ? "Sí" : "No") . "\n"; // Sí
?>