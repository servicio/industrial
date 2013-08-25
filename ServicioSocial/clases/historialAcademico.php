<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of historialAcademico
 *
 * @author Solis
 */
class historialAcademico {

    private $matricula;
    private $id_materia;
    private $acredito;
    private $calificacion;
    private $idCurso;
    private $cursando;
    private $ingresoCursando;

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

    public function getIngresoCursando() {
        return $this->ingresoCursando;
    }

    public function setIngresoCursando($ingresoCursando) {
        $this->ingresoCursando = $ingresoCursando;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getId_materia() {
        return $this->id_materia;
    }

    public function setId_materia($id_materia) {
        $this->id_materia = $id_materia;
    }

    public function getCalificacion() {
        return $this->calificacion;
    }

    public function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }

    public function getAcredito() {
        return $this->acredito;
    }

    public function setAcredito($acredito) {
        $this->acredito = $acredito;
    }

}

?>
