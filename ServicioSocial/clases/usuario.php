<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author Comodoro
 */
class usuario {
    private $usuario;
    private $pass;
    private $idPersona;
    private $semestre;
    
    
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getPassword() {
        return $this->pass;
    }

    public function setPassword($password) {
        $this->pass = $password;
    }

    public function getIdPersona() {
        return $this->idPersona;
    }

    public function setIdPersona($idPersona) {
        $this->idPersona = $idPersona;
    }

    public function getSemestre() {
        return $this->semestre;
    }

    public function setSemestre($semestre) {
        $this->semestre = $semestre;
    }



}

?>
