<?php
// Definimos varias variables
$var1 = "";
$var2 = 0;
$var3 = null;
$var4 = array();
$var5 = "Hola";

// Usamos empty para comprobar si las variables están vacías
echo "¿\$var1 está vacía? " . (empty($var1) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var2 está vacía? " . (empty($var2) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var3 está vacía? " . (empty($var3) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var4 está vacía? " . (empty($var4) ? "Sí" : "No") . "\n"; // Sí
echo "¿\$var5 está vacía? " . (empty($var5) ? "Sí" : "No") . "\n"; // No
?>