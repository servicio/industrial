<?php
include './cambioMaterias.php';

extract($_REQUEST);
 extract($_POST);
	extract($_GET);
        
$valor=$_GET['algo'];
$control=$_GET['aceptar'];
$dao=new daoServicio();
$dao->Intercambiomaterias($valor, $control);


    


?>
