<?php
// Obtenemos la marca de tiempo actual
$marca_de_tiempo = time();

// Mostramos la marca de tiempo actual
echo "La marca de tiempo actual es: $marca_de_tiempo\n";

// Convertimos la marca de tiempo a una fecha legible
$fecha_legible = date("Y-m-d H:i:s", $marca_de_tiempo);

// Mostramos la fecha legible
echo "La fecha y hora correspondiente a la marca de tiempo es: $fecha_legible\n"; 
?>