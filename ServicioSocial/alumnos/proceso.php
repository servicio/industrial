<?php
include './cambioMaterias.php';

extract($_REQUEST);
 extract($_POST);
	extract($_GET);
$matricula="prr";        
$valor=$_GET['algo'];
$semestre=$_GET['semestre'];
$control=$_GET['aceptar'];
$dao=new daoServicio();
$dao->Intercambiomaterias($matricula,$valor,$semestre, $control);
echo"<script>
             location.href='cambioMaterias.php';
        </script>";

    


?>
