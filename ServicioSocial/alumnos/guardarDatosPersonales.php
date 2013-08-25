<?php
include'../clases/usuario.php';
include '../Dao/daoServicio.php';
$guardar=new usuario();
$dao=new daoServicio();

$guardar ->setNombres($_GET["usuario"]);
$guardar ->setPass($_GET["contrasenia"]);
$guardar ->setApellidoPaterno($_GET["ApellidoPaterno"]);
$guardar ->setApellidoMaterno($_GET["ApellidoMaterno"]);
$guardar ->setEmail($_GET["Email"]);
$dao ->guardarRegistroDatos($guardar);

?>
