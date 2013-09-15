<?php
session_start();
include './validacionseSessionAlumnos.php';
$validacion = new validacionseSessionAlumnos();
$validacion->verificacionDeLogueAlumnos();

$usuario = $_SESSION["UsuarioAlumno"];
include './plantilla.php';
include '../Dao/daoServicio.php';
include '../clases/cargaArchivos.php';

$cn = new coneccion();
if ($_REQUEST['guardaarchivo'] != null) {
    $nombre = $_FILES['buscaarchivo']['name'];
    $ruta = $_FILES['buscaarchivo']['tmp_name'];
    $ubicacion = "../alumnos/subidas/" . $nombre;

    if (is_uploaded_file($ruta)) {
        if (copy($ruta, $ubicacion)) {
//            echo"Se ha cargado el archivo correctamente";
            $cargar = new cargaArchivos();
            $cargando = new daoServicio();
            $cargar->setHubicacion($ubicacion);
            $cargar->setUsuario($usuario);
            $cargar->setNombreArchivo($nombre);
            $cargando->guardaArchivos($cargar);
        }
    }
}
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="../bootsTrap2/js/bootstrap.file-input.js"></script>
    <script>$(document).ready(function() {
            $('input[type=file]').bootstrapFileInput();
        });</script>

    <div class="container" style="background-image: url(galeria/fondotextofinal.png);-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top: -20px">
        <div class="span12" style="margin: auto">
            <form name="subearchivos" action="cargaArchivos.php" method="post" enctype="multipart/form-data" style="margin-left: 50px; margin-top: 50px">
                <h3>Sube tus documentos...</h3>
                <h5>Primer documento:</h5>
                <div class="btn-group">
                    <input type="file" name="buscaarchivo" accept="application/pdf" title="Buscar Archivo">
                    <input type="submit" name="guardaarchivo" value="Enviar" class="btn btn-primary">
                </div>

                <!-------------------------------------------------------------->
                <?php
                $sql = "SELECT * FROM cargaarchivos WHERE usuario='$usuario'";
                $datos = mysql_query($sql, $cn->Conectarse());
                while ($rs = mysql_fetch_array($datos)) {
                    echo "<li><a target='_blank' href='" . $rs[2] . "'</a>" . $rs[3] . "</li>\n";
                }
                $cn->cerrarBd();
                ?>
                <!-------------------------------------------------------------->
            </form>
        </div>
    </div>
</html>
<?php
include './plantillaFooter.php';
?>
