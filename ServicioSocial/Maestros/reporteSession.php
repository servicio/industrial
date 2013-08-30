<?php include './plantillaEncabezado.php'; ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <script>
            $(document).ready(function() {
                $('#descripcion').val('');
                $('#objetivos').val('');
                $('#observaciones').val('');
                $('#tareasAsignadas').val('');
                $("#guardar").click(function() {
                    var datos = 'usuarios=' + $('#usuarios').val() +
                            '&fecha=' + $('#fecha').val() +
                            '&numeroSesion=' + $('#numeroSesion').val() +
                            '&descripcion=' + $('#descripcion').val() +
                            '&objetivos=' + $('#objetivos').val() +
                            '&observaciones=' + $('#observaciones').val() +
                            '&tareasAsignadas=' + $('#tareasAsignadas').val() +
                            '&numeroSession=' + $('#numeroSession').val();
                    $.get('guardarSession.php', datos, function() {
                        alert("Datos Agregados");
                    });
                });

            });
        </script>
    </head>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3>Reporte de la Sessión de Tutorias</h3>
        </div>
        <div class=" panel panel-body ">
            <div class="container">
                <div class="span12"  style="margin: auto">
                    <div style="float: right"><Strong>Fecha:<label id="fecha"><?php echo date("d-m-y"); ?></label></Strong></div>
                    <div style="float: left">
                        <select id="usuarios">
                            <option value="0">Seleccione un Usuario</option>
                        </select>
                    </div>
                    <div id="numeroSesion" style="float: right">Session #:</div>
                    <br><br><br>
                    <div data-spy="scroll">

                        <strong>Tareas Anteriores:</strong>
                        <div id="tareasAnteriores">
                        </div>
                        <center>
                            <table>
                                <tr>
                                    <td><strong> <?php echo utf8_decode("Descripcion de la Session:"); ?></strong></td>
                                    <td><strong> <?php echo utf8_decode("Objetivos:"); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea id="descripcion" rows="4">
                                        </textarea>
                                    </td>
                                    <td>
                                        <textarea id="objetivos" rows="4">
                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong> <?php echo utf8_decode("Observaciones:"); ?></strong></td>
                                    <td><strong> <?php echo utf8_decode("Tareas Asignadas:"); ?></strong></td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea id="observaciones">
                                        </textarea>
                                    </td>
                                    <td>
                                        <textarea id="tareasAsignadas">
                                        </textarea>
                                    </td>
                                </tr>
                            </table>
                            <input type="submit" class="btn btn-danger" value="Cancelar"/>
                            <input type="submit"id="guardar" class="btn btn-success" value="Guardar"/>
                            <br>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
<?php include './plantillaFooter.php'; ?>