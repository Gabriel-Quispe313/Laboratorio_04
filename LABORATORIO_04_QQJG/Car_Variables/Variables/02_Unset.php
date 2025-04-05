<?php
// Definimos un array
$frutas = array("manzana", "plátano", "naranja");

// Mostramos el array original
print_r($frutas);

// Usamos unset para eliminar el elemento en la posición 
// 1 (plátano)
unset($frutas[1]);

// Mostramos el array después de unset
print_r($frutas);
?>