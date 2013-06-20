<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tutor
 *
 * @author Comodoro
 */
class tutor {

    private $nomTutor;
    private $contrasena;

    public function getNomTutor() {
        return $this->nomTutor;
    }

    public function setNomTutor($nomTutor) {
        $this->nomTutor = $nomTutor;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

}

?>
