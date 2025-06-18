<?php
abstract class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    

    public function __construct($nombre, $apellido, $edad, $peso, $altura) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEdad() {
        return $this->edad;
    }
    public function getpeso() {
        return $this->peso;
    }
    public function getaltura() {
        return $this->altura;
    }

    public function info() {
        
        echo "Nombre: " . $this->getNombre() . "<br>";
        echo "Apellido: " . $this->getApellido() . "<br>";
        echo "Edad: " . $this->getEdad() . "<br>";
        echo "Peso: " . $this->getpeso() . "<br>";
        echo "Altura: " . $this->getaltura() . "<br>";

    }
    abstract public function IMC();

}
?>
