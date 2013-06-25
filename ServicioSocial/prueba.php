<?php

include './clases/usuario.php';
include './Dao/daoServicio.php';

$usuario = new usuario();
$usuario->setUsuario("e09080264");
$usuario->setPassword("pjgt");
$daoServicio = new daoServicio();
$paso = $daoServicio->verificacion_de_ingreso($usuario);
if ($paso == true) {
    echo 'Bienvenido';
} else {
    echo 'Largate';
}
?>
