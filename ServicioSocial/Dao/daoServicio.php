<?php

include '../DaoConnection/coneccion.php';

class daoServicio {
    
    function Intercambiomaterias($matricula,$materia,$semestre,$control){
        $cn=new coneccion();
        if($control=="aceptar"){
    $sql="INSERT INTO temporalcargadas( matricula,materias, semestre ) 
VALUES (
'$matricula','$materia', '$semestre'
)"; 
     mysql_query($sql, $cn->Conectarse());
     $sql = "DELETE FROM temporalseleccionar where materias = '$materia' and matricula= '$matricula'";
     mysql_query($sql, $cn->Conectarse());
     $cn->cerrarBd(); 
     return;
}
    if($control=="cancelar"){
    $sql="INSERT INTO temporalseleccionar( matricula ,materias , semestre ) 
VALUES (
'$matricula','$materia', '$semestre'
)"; 
     mysql_query($sql, $cn->Conectarse());
      $sql = "DELETE FROM temporalcargadas where materias = '$materia' and matricula= '$matricula'";
     mysql_query($sql, $cn->Conectarse());
     $cn->cerrarBd(); 
     return;
}
        
    }
    function consultatablaseleccionar($matricula){
        $cn = new coneccion();
        $sql="select materias,semestre from temporalseleccionar ";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }

        $cn->cerrarBd();
        return $registro;
    }

    function consultatablaObligadas($matricula) {
        $cn = new coneccion();
        $sql="select materias,semestre from temporalcargadas ";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }

        $cn->cerrarBd();
        return $registro;
        }    
            
function tablatemporalcargadas($materias, $matricula){
    
   $cn = new coneccion();
   //setencia sql para crear la tabla
   $renglon=$materias[0];
   
   $sql = "create table IF NOT EXISTS temporalcargadas (id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,matricula varchar(20), materias varchar(20),semestre varchar(20))";
   mysql_query($sql,$cn->Conectarse());
   foreach($materias as $renglon)         {
       
       foreach($renglon as $campo=>$valor){
     if ($campo=="materia"){
         $materia=$valor;
         
     }
       if ($campo=="semestre"){
           $semestre=$valor; 
           
       }
       if(($materia && $semestre)!= ""){
           $sql="INSERT INTO temporalcargadas (matricula, materias, semestre) VALUES ('$matricula','$materia',' $semestre') ";      
     mysql_query($sql, $cn->Conectarse());
     $cn->cerrarBd();
           $materia="";
           $semestre="";
       }
    
   
         
        $paso=false;
       }
       
   }
   
   //ejecuto la sentencia
   
    
}

function tablatemporalSeleccionar($materias, $matricula){
    
   $cn = new coneccion();
   //setencia sql para crear la tabla
   $renglon=$materias[0];
   
   $sql = "create table IF NOT EXISTS temporalseleccionar (id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY, matricula varchar(20),materias varchar(20),semestre varchar(20))";
   mysql_query($sql,$cn->Conectarse());
   foreach($materias as $renglon)         {
       
       foreach($renglon as $campo=>$valor){
     if ($campo=="materia"){
         $materia=$valor;
         
     }
       if ($campo=="semestre"){
           $semestre=$valor; 
           
       }
       if(($materia && $semestre)!= ""){
           $sql="INSERT INTO temporalseleccionar (matricula, materias, semestre) VALUES ('$matricula','$materia',' $semestre') ";      
     mysql_query($sql, $cn->Conectarse());
     $cn->cerrarBd(); 
           $materia="";
           $semestre="";
       }
    
   
        
        $paso=false;
       }
       
   }
   
   //ejecuto la sentencia
   
}
    
    function consultaMateriasObligatorias($matricula) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT m.materia, m.semestre FROM historial h, materias m where h.usuario = '$matricula' and h.idAcreditacion = 1 and h.calificacion < 70 and m.id = h.idMateria";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }

        $cn->cerrarBd();
        return $registro;
    }

    function consultaMateriasSeleccionadas($matricula) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT m.materia, m.semestre FROM materias m,historial h WHERE idAcreditacion <=2 and h.calificacion > 70 and m.id NOT IN (SELECT idMateria FROM historial where usuario='$matricula' )";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }
        $cn->cerrarBd();
        return $registro;
    }

    function TablaConsulta($registro) {
        
    }

    function verificacion_de_ingreso(usuario $u) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT * FROM usuarios WHERE usuario='" . $u->getUsuario() . "' AND pass='" . $u->getPass() . "'";
        $datos = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        while ($rs = mysql_fetch_array($datos)) {
            $_SESSION["idMaestroSession"] = $rs["id"];
            $_SESSION["nombreMaestro"] = $rs["Nombre"] . "&nbsp;" . $rs["ApellidoPaterno"] . "&nbsp;" . $rs["ApellidoMaterno"];
        }
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        $cn->cerrarBd();
        return $paso;
    }

    function accesoAlumnos(usuario $u) {
        $cn = new coneccion();
        $paso = false;
        $sql = "SELECT * FROM usuarios WHERE usuario='" . $u->getUsuario() . "' AND pass='" . $u->getPass() . "'";
        mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        $cn->cerrarBd();
        return $paso;
    }

    function loginGeneral(usuario $usu) {
        $cn = new coneccion();
        $sql = "  SELECT * FROM usuarios WHERE usuario= '" . $usu->getUsuario() . "' AND pass='" . $usu->getPass() . "'";

        $datos = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        if ($columnas > 0) {
            session_start();
            $_SESSION['usuario'] = $usu->getUsuario();
            $_SESSION['estado'] = 'Autenticado';
            header("Location: encuestaTutorias.php");
        } else {
            echo 'mal';
        }
        $cn->cerrarBd();
        //return $paso;
    }

    function insertarHistorial(historialAcademico $h) {
        $c = new coneccion();
        $sqlInsertar = "INSERT INTO historial (usuario, idMateria, idAcreditacion, calificacion,cursando, ingresoCursado) VALUES ('" . $h->getMatricula() . "','" . $h->getId_materia() . "','" . $h->getAcredito() . "','" . $h->getCalificacion() . "','" . $h->getCursando() . "','" . $h->getIngresoCursando() . "')";
        mysql_query($sqlInsertar, $c->Conectarse());
        $c->cerrarBd();
    }

    function guardarEncuesta(tutorias $t) {
        $c = new coneccion();
        $sqlguardar = "INSERT INTO TUTORIAS (lugarViviendo, estCivilPadres, escPadre, escMadre, ingresosMenFam, NumHermanos, PerPlaticar, relacionPadre, relacionMadre, fuenteIngreso, habMaterias, estudiosExtTec, cualExtTec, pasatiempos, trabajas, dondeTrabajas, ocupacionTrab, porqTrab, ingresastRazTec, ingresastRazCar, alergias, cualAlergia, cronica, cronicaCual, atencionPsi, cualAtencionPsi, atencionMedica, bebidasAlc, fumador, problemLegal, motivo, deporte, cualDep, frecuenciaDep, realizado) VALUES('" . $t->getLugarViviendo() . "','" . $t->getEstCivilPadre() . "',
            '" . $t->getEscPadre() . "','" . $t->getEscMadre() . "','" . $t->getIngresosMenFam() . "','" . $t->getNumHermanos() . "','" . $t->getPerPlaticar() . "','" . $t->getRelacionPadre() . "','" . $t->getRelacionMadre() . "','" . $t->getFuenteIngreso() . "','" . $t->getHabMaterias() . "','" . $t->getEstudiosExtTec() . "','" . $t->getCualExtTec() . "','" . $t->getPasatiempos() . "','" . $t->getTrabajas() . "','" . $t->getDondeTrabajas() . "','" . $t->getOcupacionTrab() . "','" . $t->getPorqTrab() . "','" . $t->getIngresastRazTec() . "',
                '" . $t->getIngresastRazCar() . "','" . $t->getAlergias() . "','" . $t->getCualAlergia() . "','" . $t->getCronica() . "','" . $t->getCronicaCual() . "','" . $t->getAtencionPsi() . "','" . $t->getCualAtencionPsi() . "','" . $t->getAtencionMedica() . "','" . $t->getBebidasAlc() . "','" . $t->getFumador() . "','" . $t->getProblemLegal() . "','" . $t->getMotivo() . "','" . $t->getDeporte() . "','" . $t->getCualDep() . "','" . $t->getFrecuenciaDept() . "','" . $t->getRealizado() . "')";
        mysql_query($sqlguardar, $c->Conectarse());
        $c->cerrarBd();
    }

    function guardarAlumnos(datosPersonales $datosP) {
        $cn = new coneccion();
        $sql = "INSERT INTO datosPersonales(usuario, nombre, apellidoPaterno, apellidoMaterno)
         VALUES('" . ucwords(strtolower($datosP->getUsuario())) . "','" . ucwords(strtolower($datosP->getNombre())) . "','" . ucwords(strtolower($datosP->getApellidoPaterno())) . "'
             ,'" . ucwords(strtolower($datosP->getApellidoMaterno())) . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    function guardarRegistroDatos(usuario $usuario) {
        $cn = new coneccion();
        $sql = "INSERT INTO usuarios(usuario, pass, Nombres, ApellidoMaterno,ApellidoPaterno,Email)
         VALUES('" . $usuario->getUsuario() . "','" . $usuario->getPass() . "','" . $usuario->getNombres() . "','" . $usuario->getApellidoMaterno() . "'
             ,'" . $usuario->getApellidoPaterno() . "','" . $usuario->getEmail() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

    function guardarTutorias(avisosTutor $avisosT) {
        $cn = new coneccion();
        $sql = "INSERT INTO avisostutor (titulo,detalles) 
           VALUES ('" . $avisosT->getTitulo() . "','" . $avisosT->getDetalle() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBD;
    }

    function guardarSessionTutorado(sessionTutorias $sesion) {
        $cn = new coneccion();
        $sql = "INSERT INTO sesiontutorias(matricula, fecha, descripcionSesion, objetivos, observaciones, tareasAsignadas, numeroSesion)
            VALUES('" . $sesion->getMatricula() . "','" . $sesion->getFecha() . "','" . $sesion->getDescripcionSesion() . "','" . $sesion->getObjetivos() . "','" . $sesion->getObservaciones() . "','" . $sesion->getTareasAsignadas() . "','" . $sesion->getNumeroSession() . "')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBd();
    }

//<!--JOEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEELLLLLLLLLLLLLL-->
    function guardaArchivos(cargaArchivos $cargar) {
        $cn = new coneccion();
        $sql = "INSERT INTO cargaarchivos (usuario,ubicacion,nombre) 
           VALUES ('" . $cargar->getUsuario() . "','" . $cargar->getHubicacion() . "','".$cargar->getNombreArchivo()."')";
        mysql_query($sql, $cn->Conectarse());
        $cn->cerrarBD;
    }

    //<!--JOEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEELLLLLLLLLLLLLL-->   
    function dameNumeroSession($matricula) {
        $cn = new coneccion();
        $numeroSession = 0;
        $sql = "SELECT count(*) as numeroSession from sesiontutorias where matricula ='$matricula';";
        $datos = mysql_query($sql, $cn->Conectarse());
        while ($rs = mysql_fetch_array($datos)) {
            $numeroSession = $rs["numeroSession"];
        }
        $numeroSession+=1;
        $cn->cerrarBd();
        return $numeroSession;
    }

    function consultavalidar(historialAcademico $h) {
        $cn = new coneccion();
        $sql = "SELECT * FROM historial WHERE usuario='" . $h->getMatricula() . "'and idMateria='" . $h->getId_materia() . "'";
        $consulta = mysql_query($sql, $cn->Conectarse());
        $registro = array();
        if ($consulta != false) {
            while ($renglon = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
                $registro[] = $renglon;
            }
            mysql_free_result($consulta);
        }

        $cn->cerrarBd();
        return $registro;
    }

    function verificacionInsertarPrecarga($usuario) {
        $paso = false;
        $sql = "SELECT * FROM precarga WHERE usuario = '$usuario'";
        $datos = mysql_affected_rows();
        if ($datos > 0) {
            $paso = true;
        }
        return $paso;
    }

}
?>

