<?php
require_once 'persona.php';
class Administrativo extends Persona{
    public $profesion;
    public $aniosexperience;
    

    public function __construct($nombre, $apellido, $edad, $profesion, $aniosexperience, $peso, $altura){
        parent::__construct($nombre, $apellido, $edad, $peso, $altura);
        $this->profesion = $profesion;
        $this->aniosexperience = $aniosexperience;
        
    }

    public function getprofesion(){
        return $this->profesion;
    }
    public function getaniosexperience(){
        return $this->aniosexperience;
    }
    public function getpeso(){
        return $this->peso;
    }
    public function getaltura(){
        return $this->altura;
    }

    public function info(){
        parent::info();
        echo "Profesión: " . $this->getprofesion() . "<br>";
        echo "Años de Experiencia: " . $this->getaniosexperience() . "<br>";
        
    }
    public function IMC(){
        echo "IMC: " . round($this->getpeso() / ($this->getaltura() * $this->getaltura()), 2) . "<br>";
    }
}


?>