<?php
// Definimos una fecha
$mes = 2; // Febrero
$dia = 29; // Día 29
$año = 2024; // Año bisiesto

// Verificamos si la fecha es válida
if (checkdate($mes, $dia, $año)) {
    echo "La fecha $dia/$mes/$año es válida.\n";
} else {
    echo "La fecha $dia/$mes/$año no es válida.\n";
}

// Probamos con otra fecha
$mes2 = 2; // Febrero
$dia2 = 30; // Día 30 (no válido)
$año2 = 2023; // Año no bisiesto

// Verificamos si la segunda fecha es válida
if (checkdate($mes2, $dia2, $año2)) {
    echo "La fecha $dia2/$mes2/$año2 es válida.\n";
} else {
    echo "La fecha $dia2/$mes2/$año2 no es válida.\n";
}
?>