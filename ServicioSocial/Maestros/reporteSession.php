<html>

    <?php
    include './plantilla.php';
    ?> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    </head>
    <div class="container">
        <div class="span12"  style="margin: auto">
            <div style="float: right"><Strong>Fecha:  <?php echo date("d-m-y"); ?></Strong></div>
            <br>
            <div style="float: left">
                <select>
                    <option>Seleccione un Usuario</option>
                </select>
            </div>
            <div style="float: right">Session #:</div>
            <br><br><br>
            <div>
                <strong>Tareas Anteriores:</strong>
                <div id="TareasAnteriores">
                </div>
                <br><br>
                <strong> <?php echo utf8_decode("Descripcion de la Sessión:"); ?></strong>
                <br>
                <textarea>

                </textarea>
                <br>
                <strong> <?php echo utf8_decode("Objetivos:"); ?></strong>
                <br>
                <textarea>

                </textarea>
                <br>
                <strong> <?php echo utf8_decode("Observaciones:"); ?></strong>
                <br>
                <textarea>

                </textarea>
                <br>
                <strong> <?php echo utf8_decode("Tareas Asignadas:"); ?></strong>
                <br>
                <textarea>

                </textarea>

            </div>
            <input type="submit" class="btn btn-danger" value="Cancelar"/>
            <input type="submit" class="btn btn-success" value="Guardar"/>
        </div>
    </div>
</html>