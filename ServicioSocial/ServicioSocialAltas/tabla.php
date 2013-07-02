<?php

include '../DaoConnection/coneccion.php';
$matricula = $_GET["matricula"];
$cn = new coneccion();
$sql = "SELECT * FROM historial, materias, acreditacion, curso  
WHERE  historial.idMateria = materias.id and historial.idAcreditacion = acreditacion.id and historial.idCurso = curso.id
and usuario = '$matricula' ORDER BY semestre";
mysql_query("SET materia 'utf8'");
$datos = mysql_query($sql, $cn->Conectarse());
echo "
<table class='table table-hover'>
<thead>
 <th style='width:100px'>Semestre</th>
 <th style='width:100px'>Materias</th>
 <th style='width:100px'>Aprobado</th>
 <th style='width:100px'>Calificación</th>
 <th style='width:100px'>Curso</th>
 <th style='width:100px'>Cursando</th>
 </thead>

";
while ($rs = mysql_fetch_array($datos)) {
    echo"<tr>
        <td><center>" . $rs["semestre"] . "</center></td>
        <td><center>" . utf8_encode($rs["materia"]) . "</center></td>
        <td><center>" . $rs["acredito"] . "</center></td>
        <td><center>" . $rs["calificacion"] . "</center></td>
        <td><center>" . $rs["curso"] . "</center></td>
        <td><center>" . $rs["cursando"] . "</center></td>
        </tr>";
}
echo"</table>";