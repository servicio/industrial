<?php

include '../clases/usuario.php';
include '../Dao/daoServicio.php';
$usuario = new usuario();
$dServicio = new daoServicio();
$usuario->setUsuario($_GET["usua"]);
$usuario->setPassword($_GET["pass"]);
$paso = $dServicio->verificacion_de_ingreso($usuario);
if ($paso == true) {
    echo 'Bienvenido';
} else {
    echo 'Denegado';
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
