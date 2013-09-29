<?php
include '../clases/tutotMaestrosAlumnos.php';
$asignacion = new tutotMaestrosAlumnos();
$asignacion->setIdMaestro($_GET["maestro"]);
$asignacion->setMatricula($_GET["alumnos"]);

?>
