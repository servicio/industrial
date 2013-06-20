<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of daoServicio
 *
 * @author Solis
 */
include '../DaoConnection/coneccion.php';
class daoServicio {
    
   function verificacion_de_ingreso(usuario $u) {
       $paso=false;
       $sql= "SELECT * FROM usuario WHERE usuario='".$u->getUsuario()."',Password='".$u->getPassword()." ";
       $coneccion=new coneccion();
       mysql_query($sql,$coneccion->conectarse());
       $columnas = mysql_affected_rows();
       if ($columnas!=0){
           $paso=true;
       }
       else{
           $paso=false;
       }
       return $paso;
   }
}

?>
