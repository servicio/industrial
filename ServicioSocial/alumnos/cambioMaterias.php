<?php
 include './plantilla.php'; 
 include '../clases/materias.php';
 include '../Dao/daoServicio.php';
extract($_REQUEST);
 extract($_POST);
 $id[]=$_GET['alguno[]'];
 foreach($id as $renglon)   { 
 echo $renglon;
 
 }
?>
