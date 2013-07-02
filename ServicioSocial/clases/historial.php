<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of historial
 *
 * @author Comodoro
 */
class historial {

    private $id;
    private $usuario;
    private $idMateria;
    private $idAcreditacion;
    private $calificacion;
    private $idCurso;
    private $cursando;
    private $ingresoCursuando;

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

    public function getIdMateria() {
        return $this->idMateria;
    }

    public function setIdMateria($idMateria) {
        $this->idMateria = $idMateria;
    }

    public function getIdAcreditacion() {
        return $this->idAcreditacion;
    }

    public function setIdAcreditacion($idAcreditacion) {
        $this->idAcreditacion = $idAcreditacion;
    }

    public function getCalificacion() {
        return $this->calificacion;
    }

    public function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }

    public function getIdCurso() {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    public function getCursando() {
        return $this->cursando;
    }

    public function setCursando($cursando) {
        $this->cursando = $cursando;
    }

    public function getIngresoCursuando() {
        return $this->ingresoCursuando;
    }

    public function setIngresoCursuando($ingresoCursuando) {
        $this->ingresoCursuando = $ingresoCursuando;
    }

}

?>
