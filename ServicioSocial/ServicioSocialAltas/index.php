<?php
include '../DaoConnection/coneccion.php';
$coneccion = new coneccion();
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
        <script type="text/javascript" src="../bootsTrap2/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                var control = 0;
                $('#tablaMateriasCargadas').hide();
                $('#exito').hide();
                $('#fracaso').hide();
                $('#fin').hide();
                $('#materia').hide();
                $('#especialidad').hide();
                $('#modal').click(function() {
                    $('#myModal').modal('show', function() {
                    });
                });
                $('#ingreso').change(function() {
                    var ingraso = $('#ingreso').val();
                    if (ingraso > 6) {
                        $('#materia').show('slow');
                        $('#especialidad').show('slow');
                    }
                    else {
                        $('#materia').hide('slow');
                        $('#especialidad').hide('slow');
                    }
                });
                $('#especialidad').change(function() {
                    var especialidad = $('#especialidad').val();
                    $('#materia').load('cargaMaterias.php?id=' + especialidad);
                });

                $('#finalizar').click(function() {
                    $('#matricula').val('');
                    $('#nombre').val('');
                    $('#apellidoP').val('');
                    $('#apellidoM').val('');
                    $('#cursando').prop('selectedIndex', 0);
                    $('#especialidad').prop('selectedIndex', 0);
                    $('#materia').prop('selectedIndex', 0);
                    $('#acreditacion').prop('selectedIndex', 0);
                    $('#calificacion').val('');
                    $('#cursoT').prop('selectedIndex', 0);
                    $('#ingreso').prop('selectedIndex', 0);
                    $('#fin').show('slow');
                    $('#fin').delay("1500");
                    $('#fin').slideUp("slow");
                    control = 0;
                });

                $('#guardar').click(function() {
                    var m = $('#matricula').val();
                    var espe = $('#especialidad').val();
                    var mat = $('#materia').val();
                    var acred = $('#acreditacion').val();
                    var calif = $('#calificacion').val();
                    var Tcurso = $('#cursoT').val();
                    var cursando = $('#cursando').val();
                    var ingr = $('#ingreso').val();
                    var materias = $('#materiasComunes').val();
//                    ---------datosPersonales------------------
                    var nombre = $('#nombre').val();
                    var apellidoP = $('#apellidoP').val();
                    var apellidoM = $('#apellidoM').val();

                    if (m == "" || acred == 0 || Tcurso == 0 || cursando == 0 || ingr == 0) {
                        $('#fracaso').slideDown("slow");
                        $('#fracaso').delay("1500");
                        $('#fracaso').slideUp("slow");
                    }
                    else {
                        if (cursando > 0) {
                            $(this).load('guardarMaterias.php?matricula=' + m + '&especialidad=' + espe + '&materia=' + mat + '&acreditacion=' + acred + '&calificacion=' + calif + '&tipoCurso=' + Tcurso + '&cursando=' + cursando + '&ingreso=' + ingr + '&materiaComunes=' + materias);
                            $('#exito').show("slow");
                            $('#exito').delay("1500");
                            $('#exito').slideUp("slow");
                            $('#cursando').prop('selectedIndex', 0);
                            $('#especialidad').prop('selectedIndex', 0);
                            $('#materia').prop('selectedIndex', 0);
                            $('#acreditacion').prop('selectedIndex', 0);
                            $('#calificacion').val('');
                            $('#cursoT').prop('selectedIndex', 0);
                            $('#ingreso').prop('selectedIndex', 0);
                            $('#materiasComunes').prop('selectedIndex', 0);
                            $('#tablaMateriasCargadas').load('tabla.php?matricula=' + m);
                            $('#tablaMateriasCargadas').show('slow');
                        }
                        else {
                            $('#fracaso').slideDown("slow");
                            $('#fracaso').delay("1500");
                            $('#fracaso').slideUp("slow");
                        }
                        alert(control)
                        if (control == 0) {
                            $(this).load('guardarDatosPersonales.php?nombre=' + nombre + '&apellidoP=' + apellidoP + '&apellidoM=' + apellidoM + '&matricula=' + m);
                            control = 1;
                        }
                    }
                });
            });
        </script>
    </head> 

    <body style="background-color:  #e5e5e5">
    <center>
        <div style="width: 960px; background-color: white;">
            <br>
            <fieldset style="border-radius: 10px">
                <center>
                    <div id="fracaso" class="alert alert-error">
                        <strong>Llene todos los campos Correspondientes</strong>
                    </div>
                    <div id="exito" class="alert alert-success">
                        <strong>Datos Gurdados</strong>
                    </div>
                    <div id="fin" class="alert alert-success">
                        <strong>Usuario Finalizado</strong>
                    </div>
                    <legend>Datos Alumnos</legend>
                        <input id="matricula" style="width: 250px; padding: 15px;" type="text" placeholder="Matricula..." name="matricula"/>
                        <input id="nombre" type="text" style="width: 250px; padding: 15px;" placeholder="Nombre" />
                        <br>
                        <input id="apellidoP"type="text" style="width: 250px; padding: 15px;"  placeholder="Apellido Paterno"/>
                        <input id="apellidoM" type="text" style="width: 250px; padding: 15px;" placeholder="ApellidoMaterno"/>
                    <br>
                    <br>
                    <br>
                    <br>
                    <select id="ingreso" style="width: 250px; margin-right: 250px; ">
                        <option value="0">Seleccione el Ingreso</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select> 
                    <br>
                    <select id="materiasComunes" style="margin-right: 250px; width: 250px">
                        <option value="0">Selecione una Materia</option>
                        <?php
                        $sqlMateriasTronco = "select * from materias where idEspecialidad=0";
                        $datosMaterias = mysql_query($sqlMateriasTronco, $coneccion->Conectarse());
                        while ($rs = mysql_fetch_array($datosMaterias)) {
                            ?>
                            <option value="<?php echo $rs[0] ?>"><?php echo utf8_encode($rs["materia"]); ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <select id="especialidad" style="width: 250px">
                        <option value="0">Seleccione la Especialidad</option>
                        <?php
                        $sql = "SELECT * from especialidad";
                        $datos = mysql_query($sql, $coneccion->Conectarse());
                        while ($rs = mysql_fetch_array($datos)) {
                            ?>
                            <option value="<?php echo $rs["id"] ?>"><?php echo $rs["especialidad"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <select id="materia" name="materia" style="width: 250px">
                        <option value="0">Seleccione una Materia</option>
                    </select>
                    <br>
                    <select id="acreditacion" style="width: 250px">
                        <option value="0">Tipo de Acreditacion</option>
                        <?php
                        $sqlAcreditacion = "SELECT * FROM acreditacion";
                        $datos = mysql_query($sqlAcreditacion, $coneccion->Conectarse());
                        while ($rs = mysql_fetch_array($datos)) {
                            ?>
                            <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["acredito"] ?></option>
                            <?php
                        }
                        ?>
                    </select>

                    <input id="calificacion" type="text" style="height: 30px; width: 250px" placeholder="Calificacion" name="calificacion"/>
                    <br>
                    <select id="cursando" style="width: 250px">
                        <option value="0">Cursando</option>
                        <option value="1">Si</option>
                        <option value="2">No</option>
                    </select>
                </center>
            </fieldset>
            <br>
            <input id="guardar" 
                   class="btn btn-success" 
                   type="submit" 
                   value="Guardar"/>
            <input id="finalizar" 
                   class="btn btn-primary" 
                   type="submit" 
                   value="Finalizar"/>
            <hr>
            <table id="tablaMateriasCargadas" class="table table-hover">
            </table>
        </div>
    </center>
</body> 
</html>
