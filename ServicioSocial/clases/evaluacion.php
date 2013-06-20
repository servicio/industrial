<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of evaluacion
 *
 * @author Solis
 */
class evaluacion {
  
     private $idUsuario;
     private $evaluo;
     public function getIdUsuario() {
         return $this->idUsuario;
     }

     public function setIdUsuario($idUsuario) {
         $this->idUsuario = $idUsuario;
     }

     public function getEvaluo() {
         return $this->evaluo;
     }

     public function setEvaluo($evaluo) {
         $this->evaluo = $evaluo;
     }


     
}

?>
