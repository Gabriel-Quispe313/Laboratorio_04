<?php
// Definimos una cadena
$cadena = "Hola, mundo. Bienvenido a PHP.";

// Buscamos la primera aparición de varias subcadenas
$resultado1 = strstr($cadena, "mundo");      // Debería devolver "mundo. Bienvenido a PHP."
$resultado2 = strstr($cadena, "Bienvenido");  // Debería devolver "Bienvenido a PHP."
$resultado3 = strstr($cadena, "PHP");         // Debería devolver "PHP."
$resultado4 = strstr($cadena, "adiós");       // No se encuentra, debería devolver false

// Mostramos los resultados
echo "Resultado de buscar 'mundo': " . ($resultado1 !== false ? $resultado1 : "No encontrado") . "\n"; 
echo "Resultado de buscar 'Bienvenido': " . ($resultado2 !== false ? $resultado2 : "No encontrado") . "\n"; 
echo "Resultado de buscar 'PHP': " . ($resultado3 !== false ? $resultado3 : "No encontrado") . "\n"; 
echo "Resultado de buscar 'adiós': " . ($resultado4 !== false ? $resultado4 : "No encontrado") . "\n"; 
?>