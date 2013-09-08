<?php

session_start();

class validacionseSessionAlumnos {

    function verificacionDeLogueAlumnos() {
        $usuario = $_SESSION['Usuario'];
        if ($usuario == null) {
            header('Location: LoginAlumno.php');
        }
    }

    function verificacionSessionAlumnos() {
        $usuarioSession = $_SESSION['Usuario'];
        if ($usuarioSession != null) {
            header('Location: index.php');
        }
    }

}

?>
