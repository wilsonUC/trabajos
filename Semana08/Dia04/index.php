<?php
require_once 'persona.php';
require_once 'Docente.php';
require_once 'Administrativo.php';
//$persona1 = new Persona("wilson", "Uraccahua", 12, 70, 1.70);
$Docente = new Docente("Lennox", "Condori", 18, "Profesor de Matematicas", 66, 1.60);
$Administrativo = new Administrativo("Danna", "Medina", 18, "Diseño Grafico", "10 años", 50, 1.50);


echo "<h1>Información del Docente:</h1>";
$Docente->info();
$Docente->IMC();

echo "<h1>Información del Administrativo:</h1>";
$Administrativo->info();
$Administrativo->IMC();
?>
