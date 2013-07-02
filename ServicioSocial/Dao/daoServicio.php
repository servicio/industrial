<?php

include '../DaoConnection/coneccion.php';

class daoServicio {

    function verificacion_de_ingreso(usuario $u) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT * FROM usuarios WHERE usuario='" . $u->getUsuario() . "' AND pass='" . $u->getPassword() . "'";
        $datos = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        $cn->cerrarBd();
        return $paso;
    }

    function insertarHistorial(historial $h) {
        $c = new coneccion();
        $sqlInsertar = "INSERT INTO historial (usuario, idMateria, idAcreditacion, calificacion, idCurso, cursando, ingresoCursado) VALUES ('" . $h->getUsuario() . "','" . $h->getIdMateria() . "','" . $h->getIdAcreditacion() . "','" . $h->getCalificacion() . "','" . $h->getIdCurso() . "','" . $h->getCursando() . "','" . $h->getIngresoCursuando() . "')";
        mysql_query($sqlInsertar, $c->Conectarse());
        $c->cerrarBd();
    }

}

?>
