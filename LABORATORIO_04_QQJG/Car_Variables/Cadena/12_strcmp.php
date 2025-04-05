<?php
// Definimos varias cadenas
$cadena1 = "Hola";
$cadena2 = "Hola";
$cadena3 = "hola";
$cadena4 = "Adiós";

// Comparamos las cadenas
$resultado1 = strcmp($cadena1, $cadena2); // Debe devolver 0 (iguales)
$resultado2 = strcmp($cadena1, $cadena3); // Debe devolver < 0 (diferentes por caso)
$resultado3 = strcmp($cadena1, $cadena4); // Debe devolver > 0 (Hola es mayor que Adiós)

// Mostramos los resultados
echo "Comparando '$cadena1' y '$cadena2': " . $resultado1 . "\n"; // 0
echo "Comparando '$cadena1' y '$cadena3': " . $resultado2 . "\n"; // < 0
echo "Comparando '$cadena1' y '$cadena4': " . $resultado3 . "\n"; // > 0
?>