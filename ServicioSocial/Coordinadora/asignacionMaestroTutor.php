<?php
include './plantillaEncabezado.php';
?>
<html>
    <script>

        $(document).ready(function() {
            $('#ingreso').change(function (){
               var id = $('#ingreso').val();
               $('#alumnos').load("alumnosDisponibles.php?idIngreso="+id);
            });
        });
    </script>

    <body>
        <div class="container">
            <div    class="span12"  style="overflow-y: scroll; height:230px ;margin: auto; background-color: white; margin-top: -20px">
                <select id="ingreso" style="width: 100px">
                    <option >Ingreso</option>
                    <?php
                    for ($i = 1; $i < 13; $i++) {
                        ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php }
                    ?>
                </select>
                <select id="alumnos">

                </select>
            </div>
        </div>
    </body>
</html>
<?php
include './plantillaFooter.php';
?>