<?php
include "Vehiculo.php";
$vehiculo1 = new Vehiculo("77-VbS", "Astom Martin", "Plateado");
echo "Datos del Vehiculo: ";
echo "La marca es " . $vehiculo1->getMarca() . "\n";
echo "El color es: " . $vehiculo1->color . "\n";
echo "La Matricula es " . $vehiculo1->getMatricula() . "\n";

echo "Datos de la Moto" . "\n";
$moto1 = new Moto("123-wer", "bmw", "negro");

//$moto1->setMatricula("123-wer");
$moto1->mostrarInfo();
echo "Datos Modificados de la marca" . "\n";
$moto1->setMarca("kawasaki");
$moto1->mostrarInfo();



?>