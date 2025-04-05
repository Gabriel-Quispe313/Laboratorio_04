<?php
class Persona{
    #propiedades
    public $nombre = 'Alejandro';
    public $edad = 45;
    public $altura = '1.89';

    #Metodos
    function Mostrar(){
        echo "su nombre es: {$this->nombre} <br>";
        echo "su Edad es: {$this->edad} <br>";
        echo "su altura es: {$this->altura} <br>";
    }
}
$persona = new Persona();
echo $persona->Mostrar();
?>