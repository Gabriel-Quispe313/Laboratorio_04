<?php
include "Eje01persona.php";

class Estudiante extends Persona {

    public $carrera;

    public function __construct($nombre, $edad, $ci, $carrera){
        parent::__construct($nombre, $edad, $ci);
        $this->carrera = $carrera;
    }
    public function estudiar() {
        return "{$this->nombre}Está estudiando {$this->carrera}.";
    }
    public function saludar() {
        return parent::saludar() . "Soy estudiante de {$this->carrera}.";
    }
}

$estudiante1 = new Estudiante("Juan", 20, "834984983B", "Informatica Industrial");
echo "<br>";
echo $estudiante1->saludar();
echo "<br>";
echo $estudiante1->estudiar();
?>