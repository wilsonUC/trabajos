<?php
class Vehiculo{
    private $matricula;
    protected $marca;
    public $color;



    function __construct($matricula, $marca, $color){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->color = $color;
    }


    function getMatricula(){
        return $this->matricula;
    }
    function setMatricula($matricula){
        
        $this->matricula = $matricula;
    }
    function getMarca(){
        return $this->marca;
    }
    function setMarca($marca){
        $this->marca = $marca;
    }

}

class Moto extends Vehiculo{
    function __construct($matricula, $marca, $color){
        parent::__construct($matricula, $marca, $color);
    }



    function mostrarInfo(){
        echo "la marca es " . 
        $this->getMarca() . 
        "\n" . "El color es " .
          $this->color . "\n" .
           "La Matricula es " .
            $this->getMatricula() . "\n";
    }
}



?>