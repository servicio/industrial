<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of materias
 *
 * @author Solis
 */
class materias {
    private $semestre;
    private $materias;
    private $planEstudios;
    public function getSemestre() {
        return $this->semestre;
    }

    public function setSemestre($semestre) {
        $this->semestre = $semestre;
    }

    public function getMaterias() {
        return $this->materias;
    }

    public function setMaterias($materias) {
        $this->materias = $materias;
    }

    public function getPlanEstudios() {
        return $this->planEstudios;
    }

    public function setPlanEstudios($planEstudios) {
        $this->planEstudios = $planEstudios;
    }


}

?>
