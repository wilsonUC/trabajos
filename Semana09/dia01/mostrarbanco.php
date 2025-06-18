<?php
include "banco.php";


$cuenta = new CuentaBancaria("Lucía");


$cuenta->depositar(100);
$cuenta->retirar(30);
$cuenta->retirar(100); 
$cuenta->depositar(-5); 


echo "<br>Saldo final: S/" . $cuenta->getSaldo();
?>
