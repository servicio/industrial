<?php include './plantillaEncabezado.php'; ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<!--        <script type="text/javascript" src="../bootsTrap/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
        <script src="../bootsTrap/js/bootstrap.min.js"></script>-->
        <script>
            $(document).ready(function() {
                $('#exito').hide();
                $('#guardar').click(function() {
                    var datos = 'titulo=' + $('#titulo').val() +
                            '&detalle=' + $('#detalles').val();
                    $.get('guardar.php', datos, function() {
                        $('#titulo').val('');
                        $('#detalles').val('');
                        $('#exito').slideDown('slow');
                        $('#exito').delay('1500');
                        $('#exito').slideUp('slow');
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                <div  id="exito" style="height: 35px" class="alert-info">
                    <strong>Nuevos Avisos Disponibles</strong>
                </div>
                <br>
                <center>
                    <input id="titulo" placeholder="Titulo de Aviso..." type="text" name="textfield" style="width: 250px;  height: 30px; margin-right: 250px"/>
                    <br><br>
                    <textarea placeholder="Observaciones..." id="detalles" style="min-width: 500px;  min-height: 200px; max-width: 500px; max-height: 200px;"></textarea>
                    <p><button id="guardar" class="btn btn-large btn-primary btn btn-success" type="button">Guardar</button></p>
                </center>
            </div>
        </div>
    </body>
</html>
<?php include './plantillaFooter.php'; ?>