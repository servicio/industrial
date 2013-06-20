<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reg_tutor
 *
 * @author Comodoro
 */
class reg_tutor {

    private $dia_tutoria;
    private $hoario_tutoria;
    private $matricula;
    private $id_tutor;

    public function getDia_tutoria() {
        return $this->dia_tutoria;
    }

    public function setDia_tutoria($dia_tutoria) {
        $this->dia_tutoria = $dia_tutoria;
    }

    public function getHoario_tutoria() {
        return $this->hoario_tutoria;
    }

    public function setHoario_tutoria($hoario_tutoria) {
        $this->hoario_tutoria = $hoario_tutoria;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getId_tutor() {
        return $this->id_tutor;
    }

    public function setId_tutor($id_tutor) {
        $this->id_tutor = $id_tutor;
    }

}

?>
