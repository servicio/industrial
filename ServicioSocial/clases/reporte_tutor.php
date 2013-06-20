<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reporte_tutor
 *
 * @author Comodoro
 */
class reporte_tutor {

    private $id_tutor;
    private $id_alumno;
    private $asistencia;
    private $comentarios;
    private $fecha;

    public function getId_tutor() {
        return $this->id_tutor;
    }

    public function setId_tutor($id_tutor) {
        $this->id_tutor = $id_tutor;
    }

    public function getId_alumno() {
        return $this->id_alumno;
    }

    public function setId_alumno($id_alumno) {
        $this->id_alumno = $id_alumno;
    }

    public function getAsistencia() {
        return $this->asistencia;
    }

    public function setAsistencia($asistencia) {
        $this->asistencia = $asistencia;
    }

    public function getComentarios() {
        return $this->comentarios;
    }

    public function setComentarios($comentarios) {
        $this->comentarios = $comentarios;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

}

?>
