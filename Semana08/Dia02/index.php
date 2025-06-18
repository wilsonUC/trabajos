<?php
include "Vehiculo.php";
$vehiculo1 = new Vehiculo("77-VbS", "Astom Martin", "Plateado");
echo "<h1>Datos del Vehiculo </h1> <br>";
echo "La marca es " . $vehiculo1->getMarca() . "<br>";
echo "El color es " . $vehiculo1->color . "<br>";
echo "La Matricula es " . $vehiculo1->getMatricula() . "<br>";

echo "<h1>Datos de la Moto </h1> <br>";
$moto1 = new Moto("123-wer", "bmw", "negro");

//$moto1->setMatricula("123-wer");
$moto1->mostrarInfo();
echo "<h1>Datos Modificados de la marca</h1> <br>";
$moto1->setMarca("kawasaki");
$moto1->mostrarInfo();



?>