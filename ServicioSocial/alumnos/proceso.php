<?php
include './cambioMaterias.php';

extract($_REQUEST);
 extract($_POST);
	extract($_GET);
$matricula="prr";        
$valor=$_GET['algo'];
$semestre=$_GET['semestre'];
$obligatoria=$_GET['obligatoria'];
$idMateria=$_GET['idMateria'];
$control=$_GET['aceptar'];
$dao=new dao();
$dao->Intercambiomaterias($matricula,$valor,$semestre, $control,$obligatoria,$idMateria);
echo"<script>
             location.href='cambioMaterias.php';
        </script>";

    


?>
