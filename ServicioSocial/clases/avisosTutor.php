<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of avisosTutor
 *
 * @author Administrador
 */
class avisosTutor {
    private $titulo;
    private $detalle;
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getDetalle() {
        return $this->detalle;
    }

    public function setDetalle($detalle) {
        $this->detalle = $detalle;
    }


}

?>
