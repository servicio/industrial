<?php

include '../clases/historialAcademico.php';
include '../Dao/daoServicio.php';
$historial = new historialAcademico();
$dao = new daoServicio();
$historial->setMatricula($_GET["matricula"]);
$historial->setId_materia($_GET["materia"]);
$historial->setAcredito($_GET["acreditacion"]);
$historial->setCalificacion($_GET["calificacion"]);
$historial->setIdCurso($_GET["tipoCurso"]);
$historial->setCursando($_GET["cursando"]);
$historial->setIngresoCursando($_GET["ingreso"]);
$dao->insertarHistorial($historial);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
