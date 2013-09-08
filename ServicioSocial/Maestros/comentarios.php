<?php include './plantillaEncabezado.php'; ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<!--        <script type="text/javascript" src="../bootsTrap/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
        <script src="../bootsTrap/js/bootstrap.min.js"></script>-->
        <script>
            $(document).ready(function() {

                $('#guardar').click(function() {
                    var titulo = $('#titulo').val();
                    var detalles = $('#detalles').val();
                    $(this).load("guardar.php?titulo=" + titulo + "&detalle=" + detalles);
//                    $(this).load("guardar.php?detalles="+detalles); 
                });

            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                <br>
                <div style="margin-left: 10px"class="row">
                    <div class="span6"></div>
                    <div class="span8"> 
                        <label>Titulo:
                            <input id="titulo" type="text" name="textfield" style="width: 250px;  height: 20px;"/>
                            <br><br>
                        </label>
                    </div>
                </div>
                <center>
                    <textarea id="detalles" style="min-width: 500px;  min-height: 200px; max-width: 500px; max-height: 200px;"></textarea>
                    <p><button id="guardar" class="btn btn-large btn-primary btn btn-success" type="button">Guardar</button></p>
                </center>
            </div>
        </div>
    </body>
</html>
<?php include './plantillaFooter.php'; ?>