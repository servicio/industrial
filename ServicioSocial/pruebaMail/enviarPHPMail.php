<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * Para que el correo pueda ser enviado se require de un servidor con SMTP configurado
 * Esta url nos dirige a un archivo cargado en un server de prueba para este ejercicio http://bextlan.com/recursos/curso-PHP/enviar-mail.php (Ya no funciona! >_<)
 */
$de = $_POST["txtDe"];
$para = $_POST["txtPara"];
$asunto = $_POST["txtAsunto"];
$mensaje = $_POST["txaMensaje"];
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type: text/html; charset=ISO-8859-1\r\n";
$cabeceras .= "From: $de \r\n";

$archivo = $_FILES['flsArchivo']['tmp_name'];
$destino = $_FILES['flsArchivo']['name'];

if (move_uploaded_file($archivo, $destino)) {
    //Trabajando con PHPMailer
    include_once ("class.phpmailer.php");
    include_once ("class.smtp.php");

    $mail = new PHPMailer(); //Objeto de PHPMailer
    $mail->IsSMTP(); //Protocolo SMTP
    $mail->SMTPAuth = true; //Autentificacion de SMTP
    $mail->SMTPSecure = "ssl"; //SSL socket layer
    $mail->Host = "smtp.gmail.com"; //Servidor de SMTP de gmail
    $mail->Port = 465; //Puerto seguro del servidor SMTp de gmail
    $mail->From = $de; //Remitente (En mi variable)
    $mail->AddAddress($para); //Destinatario
    $mail->Username = "comodoro49@gmail.com"; /* Tienes que poner una direccion de correo real y de del servidor SMTP seleccionado (GMAIL en este caso) */
    $mail->Password = "******"; //Aqui va la contraseña valida de tu correo
    $mail->Subject = $asunto; //El asunto de correo
    $mail->Body = $mensaje; //El mensaje de correo
    $mail->WordWrap = 50; //# de columnas
    $mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato HTML
    $mail->AddAttachment($destino); //Accedemos al archivo que se subio al servidor y lo adjuntamos

    if ($mail->Send()) {//Enviamos el correo por PHPMailer
        $respuesta = "El mensaje a sido enviado desde tu cuenta de Gmail :)";
    } else {
        $respuesta = "El mensaje no a sido enviado :(";
        $respuesta .= "Error: " . $mail->ErrorInfo;
    }
} else {
    $respuesta = "No se enviaron los datos, archivo adjunto no subido :(";
}
unlink($destino); //Borrar un archivo en el servidor
header("Location: formularioPHPMail.php?respuesta=$respuesta");
?>