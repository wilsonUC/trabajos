<?php
class Estudiante{
    private $nombre;
    private $nota1;
    private $nota2;

    public function __construct($nombre, $nota1, $nota2){
        $this->nombre = $nombre;
        $this->setNota1($nota1);
        $this->setNota2($nota2);
    }

    public function setNota1($valor){
        if ($valor >= 0 && $valor <= 20) {
            $this->nota1 = $valor;
        } else {
            echo "Error: La nota1 debe estar entre 0 y 20.<br>";
        }

    }
    public function setNota2($valor){
        if ($valor >= 0 && $valor <= 20) {
            $this->nota2 = $valor;
        } else {
            echo "Error: La nota2 debe estar entre 0 y 20.<br>";
        }

    }
    public function getNota1(){
        return $this->nota1;

    }
    public function getNota2(){
        return $this->nota2;

    }
    public function getNombre(){
        return $this->nombre;

    }
    public function calcularpromedio(){
        return ($this->nota1 + $this->nota2) / 2;

    }
    public function mostrarinformacion(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Nota 1: " . $this->getNota1() . "<br>";
        echo "Nota 2: " . $this->getNota2() . "<br>";
        echo "Promedio: " . $this->calcularPromedio() . "<br>";

    }
}
?>