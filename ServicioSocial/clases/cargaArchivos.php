<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cargaArchivos
 *
 * @author Joel
 */
class cargaArchivos {

    private $id;
    private $usuario;
    private $ubicacion;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getHubicacion() {
        return $this->ubicacion;
    }

    public function setHubicacion($hubicacion) {
        $this->ubicacion = $hubicacion;
    }

    //put your code here
}

?>
