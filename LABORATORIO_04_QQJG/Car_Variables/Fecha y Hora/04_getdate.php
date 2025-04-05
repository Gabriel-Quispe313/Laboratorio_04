<?php
// Obtenemos la fecha y hora actual como un array asociativo
$fecha_info = getdate();

// Mostramos la información de la fecha
echo "Año: " . $fecha_info['year'] . "\n";
echo "Mes: " . $fecha_info['mon'] . "\n";
echo "Día: " . $fecha_info['mday'] . "\n";
echo "Día de la semana: " . $fecha_info['weekday'] . "\n";
echo "Hora: " . $fecha_info['hours'] . "\n";
echo "Minuto: " . $fecha_info['minutes'] . "\n";
echo "Segundo: " . $fecha_info['seconds'] . "\n";

// Si deseas obtener información sobre una fecha específica, puedes pasarle un timestamp
$timestamp = strtotime("2025-03-17 12:00:00");
$fecha_info_especifica = getdate($timestamp);

// Mostramos la información de la fecha específica
echo "\nInformación sobre la fecha específica:\n";
echo "Año: " . $fecha_info_especifica['year'] . "\n";
echo "Mes: " . $fecha_info_especifica['mon'] . "\n";
echo "Día: " . $fecha_info_especifica['mday'] . "\n";
echo "Día de la semana: " . $fecha_info_especifica['weekday'] . "\n";
?>