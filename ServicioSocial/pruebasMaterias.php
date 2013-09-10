
<script type="text/javascript" src="bootsTrap2/js/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#materiasCargadas').load(function() {

        });
        $('#materiasDisponibles').load(function() {

        });

        $('#check').on("change", function() {
            if ($("#check").is(':checked')) {
                alert("Está activado");
            } else {
                alert("No está activado");
            }
        });
    });
</script>

<?php
include './DaoConnection/coneccion.php';
$cn = new coneccion();
$sql = "SELECT * FROM materias 
      WHERE materias.id NOT IN (SELECT idMateria FROM historial where usuario='e09080264')
      order by semestre 
      limit 20";
$datos = mysql_query($sql, $cn->Conectarse());
?>
<div id="materiasCargadas">

</div>
<hr>
<div id="materiasDisponibles">
    <?php while ($rs = mysql_fetch_array($datos)) {
        ?>

        <input type="checkbox" 
               id="check" 
               value="<?php echo $rs[0]; ?>"/><?php echo $rs[2]; ?>
        <br>
        <?php
    }
    ?>
</div>