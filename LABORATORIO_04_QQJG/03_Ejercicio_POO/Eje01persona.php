<?php
class Persona {
    public $nombre; 
    public $edad;
    private $ci;

    public function __construct($nombre, $edad, $ci) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ci = $ci;
    }
    public function saludar() {
        return "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }
    private function getCi(){
        return $this->ci;
    }
    public function mostrarCi(){
        return " C.I.: " .$this->getCi();
    }
}
//uso de la clase
$persona1 = new Persona("Jacob", 25, "12345678A");
echo $persona1->saludar();
echo $persona1->mostrarCi();
?>