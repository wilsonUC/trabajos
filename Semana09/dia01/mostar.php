<?php
include "estudiante.php";
// Ejemplo de uso:
$estudiante1 = new Estudiante("Wilson", 15, 18);
$estudiante1->mostrarInformacion();

// Intentar asignar una nota inválida
$estudiante1->setNota1(14); 
$estudiante1->mostrarInformacion(); // Esto generará un mensaje de error

?>
