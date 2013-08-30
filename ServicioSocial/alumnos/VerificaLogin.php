<?php
include '../clases/usuario.php';
include '../Dao/daoServicio.php';

$login = new usuario();
$dao = new daoServicio();
$login->setUsuario($_GET["usuario"]);
$login->setPass($_GET["pass"]);

$dao->loginGeneral($login);
//if ($paso == true) {
//    echo 'Bienvenido';
//} else {
//    echo 'Denegado';
//}

?>
