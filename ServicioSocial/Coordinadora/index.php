<?php

include './plantillaEncabezado.php';
//include '../DaoConnection/coneccion.php';
//$cn = new coneccion();
//
//$opciones = $_GET["opciones"];
//$sql = "SELECT * FROM avisostutor WHERE control=$opciones";
//$datos = mysql_query($sql, $cn->Conectarse());
//$cn->cerrarBd();
?>
<script>
    $(document).ready(function() {
        $('#avisosaMostrar').change(function() {
            var opciones = $('#avisosaMostrar').val();
            $('#avisos').load('avisos.php?opciones=' + opciones);
        });
    });



</script>




<div class="container">
    <center>
        <div    class="span12"  style="overflow-y: scroll; height: 335px;  margin: auto; background-color: white; margin-top: -20px">
            <br />
            <select id="avisosaMostrar"name="mostrar">
                <option value="0">Seleccione avisos a mostrar</option>
                <option value="1">Maestros</option>
                <option value="3">Alumnos</option>
            </select>
            <div id="avisos"> 
            </div>
        </div>
</div>


<?php

include './plantillaFooter.php';
?>