<?php
include '../DaoConnection/coneccion.php';
$cn = new coneccion();


$sql = "INSERT INTO materiascargadasusuario (idUsuarios, idMaterias, anio)select matricula, idMateria, fecha FROM temporalcargadas WHERE matricula = 'prr'";
mysql_query($sql, $cn->Conectarse());
$cn->cerrarBd();
?>
