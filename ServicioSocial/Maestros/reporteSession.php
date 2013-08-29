<html>

    <?php
    include './plantilla.php';
    ?> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <script>
            $(document).ready(function() {
                $("#guardar").click(function() {
                    var datos = 'usuarios=' + $('#usuarios').val() +
                            '&fecha='+$('#fecha').val()+
                            '&numeroSesion=' + $('#numeroSesion').val() +
                            '&descripcion=' + $('#descripcion').val() +
                            '&objetivos=' + $('#objetivos').val() +
                            '&observaciones=' + $('#observaciones').val() +
                            '&tareasAsignadas=' + $('#tareasAsignadas').val()+
                            '&numeroSession='+$('#numeroSession').val();
                        $.get('guardarSession.php', datos, function() {
                        alert("Datos Agregados");
                    });
                });

            });
        </script>
    </head>
    <div class="container">
        <div class="span12"  style="margin: auto">
            <div style="float: right"><Strong>Fecha:<label id="fecha"><?php echo date("d-m-y"); ?></label></Strong></div>
            <br>
            <div style="float: left">
                <select id="usuarios">
                    <option value="0">Seleccione un Usuario</option>
                </select>
            </div>
            <div id="numeroSesion" style="float: right">Session #:</div>
            <br><br><br>
            <div>
                <strong>Tareas Anteriores:</strong>
                <div id="tareasAnteriores">
                </div>
                <br><br>
                <strong> <?php echo utf8_decode("Descripcion de la Sessión:"); ?></strong>
                <br>
                <textarea id="descripcion">

                </textarea>
                <br>
                <strong> <?php echo utf8_decode("Objetivos:"); ?></strong>
                <br>
                <textarea id="objetivos">

                </textarea>
                <br>
                <strong> <?php echo utf8_decode("Observaciones:"); ?></strong>
                <br>
                <textarea id="observaciones">

                </textarea>
                <br>
                <strong> <?php echo utf8_decode("Tareas Asignadas:"); ?></strong>
                <br>
                <textarea id="tareasAsignadas">

                </textarea>

            </div>
            <input type="submit" class="btn btn-danger" value="Cancelar"/>
            <input type="submit"id="guardar" class="btn btn-success" value="Guardar"/>
        </div>
    </div>
</html>