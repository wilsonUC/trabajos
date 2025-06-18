<?php
class Persona{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct(){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        
    }

    function getNombre(){
        return $this->nombbre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getEdad(){
        return $this->edad;
    }

    function setNombre($nombre2){
        $this->nombre = $nombre2;
    }

    function setApellido($Apellido2){
        $this->apellido = $Apellido2;
    }

    function setEdad($edad2){
        $this->edad = $edad2;
    }

}

class Docente extends Personana{

}


?>