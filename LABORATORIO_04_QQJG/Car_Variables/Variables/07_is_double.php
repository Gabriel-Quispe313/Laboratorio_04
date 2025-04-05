<?php
// Definimos varias variables
$var1 = 10.5;        // flotante
$var2 = 3;           // entero
$var3 = "20.5";      // cadena que representa un número decimal
$var4 = 0.0;         // flotante
$var5 = null;        // nulo

// Usamos is_double para comprobar si las variables son flotantes
echo "¿\$var1 es un doble? " . (is_double($var1) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var2 es un doble? " . (is_double($var2) ? "Sí" : "No") . "\n"; // No
echo "¿\$var3 es un doble? " . (is_double($var3) ? "Sí" : "No") . "\n"; // No
echo "¿\$var4 es un doble? " . (is_double($var4) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var5 es un doble? " . (is_double($var5) ? "Sí" : "No") . "\n"; // No
?>