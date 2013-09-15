<?php

include '../DaoConnection/coneccion.php';
$idIngreso = $_GET["idIngreso"];
$cn = new coneccion();
$sql = "SELECT historial.usuario, Nombre, apellidoPaterno, apellidoMaterno FROM historial, datosPersonales where historial.usuario = datospersonales.usuario and historial.ingresoCursado=$idIngreso and
historial.usuario NOT IN (SELECT matricula FROM tutotmaestrosalumnos)";
$datos = mysql_query($sql, $cn->Conectarse());

echo '<select>
        <option>Alummno</option>';
while ($rs = mysql_fetch_array($datos)) {
    $nombre = $rs[1]. "&nbsp;". " $rs[3] " ."&nbsp;"."$rs[2]";
    echo '
        <option value="'.$rs["usuario"].'">'.$nombre.'</option>
         ';
}
echo'</select>';
?>
