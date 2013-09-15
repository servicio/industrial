<?php
include './plantilla.php';
include '../Dao/daoServicio.php';
include '../clases/cargaArchivos.php';
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
            $cargar->setUsuario("16237213");
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
                if ($gestor = opendir('subidas')) {
                    echo "<ul>";
                    while (false !== ($arch = readdir($gestor))) {
                        if ($arch != "." && $arch != "..") {
                            echo "<li><a href=\"subidas/" . $arch . "\" class=\"linkli\">" . $arch . "</a></li>\n";
                        }
                    }
                    closedir($gestor);
                    echo "</ul>";
                }
                ?>
                <!-------------------------------------------------------------->
            </form>

        </div>
    </div>
</html>
<?php
include './plantillaFooter.php';
?>
