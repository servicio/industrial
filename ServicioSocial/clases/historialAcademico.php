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

    private $id;
    private $usuario;
    private $idMateria;
    private $idAcreditacion;
    private $calificacion;
    private $idCurso;
    private $cursando;
    private $ingresoCursado;
    
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
        return $this->ingresoCursado;
    }

    public function setIngresoCursando($ingresoCursando) {
        $this->ingresoCursado = $ingresoCursando;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getId_materia() {
        return $this->idMateria;
    }

    public function setId_materia($id_materia) {
        $this->idMateria = $id_materia;
    }

    public function getCalificacion() {
        return $this->calificacion;
    }

    public function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }

    public function getAcredito() {
        return $this->idAcreditacion;
    }

    public function setAcredito($acredito) {
        $this->idAcreditacion = $acredito;
    }

}

?>
