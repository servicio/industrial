<?php
session_start();
$usuarioSession = $_SESSION['Usuario'];
if ($usuarioSession != null) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/jquery.min.js"></script>
        <script src=../"bootsTrap/js/bootstrap.js"></script>
    </head>
    <script>
        $(document).ready(function() {
            $('#error').hide();
            $('#verificacion').click(function() {
                var usua = $('#usuario').val();
                var pass = $('#pass').val();
                $('#error').load('verificacionLogin.php?usua=' + usua + '&pass=' + pass);
//                $('#error').slideDown("slow");
//                $('#error').delay("1500");
//                $('#error').slideUp("slow");
            });
        });
    </script>
    <body>
        <div class="container">
            <?php include './plantillaEncabezado.php'; ?>
            <center>
                <div   class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                    <div  id="error" style="height: 35px" class="alert-error">
                        Ingrese el <Strong>Usuario y Contraseña</Strong> correcta
                    </div>
                    <br>
                    <input id="usuario" type="text" placeholder="Usuario">
                    <br>
                    <input id="pass" type="password" placeholder="Contraseña">
                    <br>
                    <button id="verificacion" type="submit" class="btn btn-primary"> <i class="icon-ok">&nbsp;</i>&nbsp;&nbsp;Iniciar</button>
                    <button id="verificacion" type="submit" class="btn btn-danger"> <i class="icon-remove">&nbsp;</i>&nbsp;&nbsp;Cancelar</button>
                    <br>
                    <br>
                </div>
            </center>

            <?php include './plantillaFooter.php'; ?>
        </div>
    </body>
</html>
