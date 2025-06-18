<?php
require_once 'persona.php';
class Docente extends Persona{
    public $cargo;
    

    public function __construct($nombre, $apellido, $edad, $cargo, $peso, $altura){
        parent::__construct($nombre, $apellido, $edad, $peso, $altura);
        $this->cargo = $cargo;
        
    }

    public function getcargo(){
        return $this->cargo;
    }
    public function getpeso(){
        return $this->peso;
    }
    public function getaltura(){
        return $this->altura;
    }

    public function info(){
        parent::info();
        echo "Cargo: " . $this->getcargo() . "<br>";
        
    }
    public function IMC(){
        echo "IMC: " . round($this->getpeso() / ($this->getaltura() * $this->getaltura()), 2) . "<br>";
    }
     
}

?>