<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
        <script src="../bootsTrap/js/jquery.min.js"></script>
        <script src=../"bootsTrap/js/bootstrap.js"></script>
    </head>
    <script>
        $(document).ready(function() {
           $('#error').hide(); 
            $('#verificacion').click(function() {
                var usua = $('#usuario').val();
                var pass = $('#pass').val();
                $('#error').load('verificacionLogin.php?usuario=' + usua + '&pass=' + pass);
            });
        });
    </script>
    <body>
    <center>
        <br><br><br><br><br><br><br>
        <div class="hero-unit">
            <div  id="error" style=": 960px" class="alert-error">
                Ingrese el <Strong>Usuario y Contraseña</Strong> correcta
            </div>
            <h1 style="color:#56ae56 "> Inicio de Sesión</h1>
            <br>
            <input id="usuario" type="text" placeholder="Usuario">
            <br>
            <input id="pass" type="text" placeholder="Contraseña">
            <br>
            <button id="verificacion" type="submit" class="btn btn-primary"> <i class="icon-ok">&nbsp;</i>&nbsp;&nbsp;Iniciar</button>

        </div>
    </center>
</body>
</html>
