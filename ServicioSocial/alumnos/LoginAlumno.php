<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
        <script src="../bootsTrap/js/jquery.min.js"></script>
        <script src=../bootsTrap/js/bootstrap.js"></script>
    </head>
<!--    <script>
        $(document).ready(function() {
           $('#error').hide(); 
            $('#verificacion').click(function() {
                var usua = $('#usuario').val();
                var pass = $('#pass').val();
                $('#error').load('VerificaLogin.php?usua=' + usua + '&pass=' + pass);
            });
        });
    </script>-->
    <body>
    <center>
        <br><br><br><br><br><br><br>
        
            <h1 style="color:#56ae56 "> Inicio de Sesión</h1>
            <br>
            <form name="alguno" action="VerificaLogin.php" method="get">
                <input id="usuario" name="usuario" type="text" placeholder="Usuario">
            <br>
            <input id="pass" type="text" name="pass" placeholder="pass">
            <br>
            <button id="verificacion" type="submit" class="btn btn-primary"> <i class="icon-ok">&nbsp;</i>&nbsp;&nbsp;Iniciar</button>
            </form>
        </div>
    </center>
</body>
</html>
