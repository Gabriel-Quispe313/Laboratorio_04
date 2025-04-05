<?php
// Definimos una cadena para buscar
$cadena = "Hola, mi correo es ejemplo@dominio.com.";

// Definimos una expresión regular para encontrar un correo electrónico
$patron = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";

// Usamos preg_match() para buscar el patrón en la cadena
if (preg_match($patron, $cadena, $coincidencias)) {
    echo "Se encontró un correo electrónico: " . $coincidencias[0] . "\n";
} else {
    echo "No se encontró ningún correo electrónico.\n";
}
?>