<?php
include './plantilla.php';
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap-responsive.css"/>

    <script src="../bootsTrap2/js/jquery.min.js"></script>
    <script src="../bootsTrap2/js/bootstrap.js"></script>
    <script src="../bootsTrap2/js/bootstrap.file-input.js"></script>
    <script>$(document).ready(function() {
            $('input[type=file]').bootstrapFileInput();
        });</script>

    <div class="container" style="background-image: url(galeria/fondotextofinal.png);-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top: -20px">
        <div class="span12" style="margin: auto">
            <form name="subearchivos" action="" style="margin-left: 50px; margin-top: 50px">
                <h3>Sube tus documentos...</h3>
                <table>
                    <tbody>
                        <!------------------------------------------------------------------------------------------------>
                        <tr>
                            <td class="formulario">
                                <h5>Primer documento:</h5>
                            </td>
                        </tr>
                        <tr>
                            <td class="btn-group">
                                <input type="file" name="" id="" accept="application/pdf" title="Buscar Archivo">
                                <input type="submit" class="btn btn-primary" name="" value="Enviar" id="">
                            </td>
                        </tr>
                        <!------------------------------------------------------------------------------------------------>
                        <tr>
                            <td class="formulario">
                                <h5>Segundo documento:</h5>
                            </td>
                        </tr>
                        <tr>
                            <td class="btn-group">
                                <input type="file" name="" id="" accept="application/pdf" title="Buscar Archivo">
                                <input type="submit" class="btn btn-primary" name="" value="Enviar" id="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</html>
