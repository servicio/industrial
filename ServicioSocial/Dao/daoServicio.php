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

    function insertarHistorial(historialAcademico $h) {
        $c = new coneccion();
        $sqlInsertar = "INSERT INTO historial (usuario, idMateria, idAcreditacion, calificacion, idCurso, cursando, ingresoCursado) VALUES ('" . $h->getMatricula() . "','" . $h->getId_materia() . "','" . $h->getAcredito() . "','" . $h->getCalificacion() . "','" . $h->getIdCurso() . "','" . $h->getCursando() . "','" . $h->getIngresoCursando() . "')";
        mysql_query($sqlInsertar, $c->Conectarse());
        $c->cerrarBd();
    }

    function guardarEncuesta(tutorias $t) {
        $c = new coneccion();
        $sqlguardar = "INSERT INTO TUTORIAS (idTutorias, lugarViviendo, estCivilPadres, escPadre, escMadre, ingresosMenFam, relacionPadre, relacionMadre, fuenteIngreso, habMaterias, estudiosExtTec, cualExtTec, pasatiempos, trabajas, dondeTrabajas, ocupacionTrab, porqTrab, ingresastRazTec, ingresastRazCar, alergias, cualAlergia, cronica, cronicaCual, atencionPsi, cualAtencionPsi, atencionMedica, bebidasAlc, fumador, problemLegal, motivo, deporte, cualDep, frecuenciaDep, realizado) VALUES('" . $t->getLugarViviendo() . "','" . $t->getEstCivilPadre() . "',
            '" . $t->getEstCivilPadre() . "','" . $t->getEscPadre() . "','" . $t->getEscMadre() . "','" . $t->getIngresosMenFam() . "','" . $t->getRelacionMadre() . "','" . $t->getRelacionPadre() . "','" . $t->getFuenteIngreso() . "','" . $t->getHabMaterias() . "','" . $t->getEstudiosExtTec() . "','" . $t->getCualExtTec() . "','" . $t->getPasatiempos() . "','" . $t->getTrabajas() . "','" . $t->getDondeTrabajas() . "','" . $t->getOcupacionTrab() . "','" . $t->getPorqTrab() . "','" . $t->getIngresastRazTec() . "',
                '" . $t->getIngresastRazCar() . "','" . $t->getAlergias() . "','" . $t->getCualAlergia() . "','" . $t->getCronica() . "','" . $t->getCronicaCual() . "','" . $t->getAtencionPsi() . "','" . $t->getCualAtencionPsi() . "','" . $t->getAtencionMedica() . "','" . $t->getBebidasAlc() . "','" . $t->getFumador() . "','" . $t->getProblemLegal() . "','" . $t->getMotivo() . "','" . $t->getDeporte() . "','" . $t->getCualDep() . "','" . $t->getFrecuenciaDept() . "','" . $t->getRealizado() . "')";
        mysql_query($sqlInsertar, $c->Conectarse());
        $c->cerrarBd();
    }

    function guardarAlumnos(datosPersonales $datosP) {
        $cn = new coneccion();
        $sql = "INSERT INTO datosPersonales(usuario, nombre, apellidoPaterno, apellidoMaterno)
         VALUES('" . $datosP->getUsuario() . "','" . $datosP->getNombre() . "','" . $datosP->getApellidoPaterno() . "'
             ,'" . $datosP->getApellidoMaterno() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

}

?>
