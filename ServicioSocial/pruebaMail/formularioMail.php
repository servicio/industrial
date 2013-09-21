<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Envío de correo de la función MAIL de php</title>
        <style>
            form{
                margin: 1em auto;
                text-align: center;
            }

            span{
                color: #F60;
                font-size: 1.5em;
            }
        </style>
        <!--        Scrip para validar las cajas de texo-->
        <script>
            function validarForm() {
                var verifica = true;
                var exRegEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/; //Expresion regular del Correo
            }
        </script>
    </head>
    <body>
        <form name="mail_frm" action="enviarMail.php" method="post" enctype="application/x-www-form-urlencoded">
            De:<input type="text" name="txtDe"/><br>
            Para:<input type="text" name="txtDe"/><br>
            Asunto:<input type="text" name="txtDe"/><br>
            Mensaje:<br><textarea name="txaMensaje"></textarea><br>
            <input type="button" name="btnEnviar" value="Enviar"/>
            <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            if (isset($_GET["respuesta"])) {
                echo"<span>" . $_GET["respueta"] . "</span>";
            }
            ?>
        </form>
    </body>
</html>
