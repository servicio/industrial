<?php

include '../clases/historial.php';
include '../Dao/daoServicio.php';
$historial = new historial();
$dao = new daoServicio();
$historial->setUsuario($_GET["matricula"]);
$historial->setIdMateria($_GET["materia"]);
$historial->setIdAcreditacion($_GET["acreditacion"]);
$historial->setCalificacion($_GET["calificacion"]);
$historial->setIdCurso($_GET["tipoCurso"]);
$historial->setCursando($_GET["cursando"]);
$historial->setIngresoCursuando($_GET["ingreso"]);
$dao->insertarHistorial($historial);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
