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
class daoServicio {
   function verificacion_de_ingreso(usuario $u) {
       $sql= "SELECT * FROM usuario WHERE usuario='".$u->getUsuario()."',Password='".$u->getPassword()." ";
       
       
       
       
       
       
   }
}

?>
