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
    function  loginGeneral(usuario $usu)
    {
         $cn = new coneccion();
     $sql="  SELECT * FROM usuarios WHERE usuario= '" . $usu->getUsuario() . "' AND pass='" . $usu->getPass() . "'";
      
        $datos = mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
       if ($columnas > 0) {
    session_start();     
    $_SESSION['usuario'] = $usu->getUsuario() ;
    $_SESSION['estado'] = 'Autenticado';
     header("Location: encuestaTutorias.php");
        } else {
            echo 'mal';
        }
        
   
    $cn->cerrarBd();
        //return $paso;
    
       
        
        
        
    }
    function consultaMaterias(matricula $prr){
        $cn = new coneccion();
        $sql = "SELECT * FROM materias";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)){
echo $row['tu-campo'];
}

        $cn->cerrarBd();
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
         VALUES('" . $datosP->getUsuario() . "','" . $datosP->getNombre() . "','" . $datosP->getApellidoPaterno() . "'
             ,'" . $datosP->getApellidoMaterno() . "')";
        try {
            mysql_query($sql, $cn->Conectarse());
            $cn->cerrarBd();
        } catch (Exception $e) {
            echo $e->getMessage();
            $cn->cerrarBd();
        }
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
    function mostrarTabla($arreglo2D){
        
        
  	 if(isset($arreglo2D)){
  	 	echo '<table border="1">';
  	 	echo '<tr>';
  	 	    //encabezados. 
  	 	    //Usar el primer renglon de la tabla para obtener los encabezados
  	 	    $renglon =  $arreglo2D[0]; 
  	 	    foreach($renglon as $campo=>$valor){
  	 	    	echo "<th> $campo </th>";
  	 	    }
  	 	echo '</tr>';
  	 	//Recorrer todos los renglones
  	 	foreach($arreglo2D as $renglon)
  	 	{	
  	 	   echo "<tr>";
           foreach($renglon as $campo=>$valor){
           	   echo "<td> $valor </td>";
           }   	 	  
  	 	   echo "</tr>";
  	 	}
  	 	echo "</table>";
  	 }
   }
}

?>
