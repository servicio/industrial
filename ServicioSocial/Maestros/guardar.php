<?php
include '../clases/avisosTutor.php';
include '../Dao/daoServicio.php';
$dao = new daoServicio();
$avisosTutor = new avisosTutor();
$avisosTutor->setTitulo($_GET["titulo"]);
$avisosTutor->setDetalle($_GET["detalle"]);
$dao->guardarTutorias($avisosTutor);
echo 'Guardar';

?>