<?php
// Obtenemos el valor de pi
$valor_pi = pi();

// Mostramos el valor de pi
echo "El valor de π (pi) es: $valor_pi\n";

// Usamos pi() para calcular el área de un círculo con radio 5
$radio = 5;
$area_circulo = $valor_pi * ($radio ** 2);

// Mostramos el área del círculo
echo "El área de un círculo con radio $radio es: $area_circulo\n"; 
?>