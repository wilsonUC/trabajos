<?php
class CuentaBancaria {
    
    private $titular;
    private $saldo;


    public function __construct($titular) {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    
    public function depositar($cantidad) {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
            echo "Depósito de S/". $cantidad. "realizado. Nuevo saldo: S/" . $this->saldo . "<br>";
        } else {
            echo "Error: La cantidad a depositar debe ser mayor que cero.<br>";
        }
    }

    public function retirar($cantidad) {
        if ($cantidad > 0) {
            if ($cantidad <= $this->saldo) {
                $this->saldo -= $cantidad;
                echo "Retiro de S/" . $cantidad . " realizado. Nuevo saldo: S/" . $this->saldo . "<br>";
            } else {
                echo "Error: Saldo insuficiente para retirar S/" . $cantidad . " Saldo disponible: S/" . $this->saldo . "<br>";
            }
        } else {
            echo "Error: La cantidad a retirar debe ser mayor que cero.<br>";
        }
    }


    public function getSaldo() {
        return $this->saldo;
    }
}
?>
