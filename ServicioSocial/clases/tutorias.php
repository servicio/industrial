<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tutorias
 *
 * @author Comodoro
 */
class tutorias {

    private $lugarViviendo;
    private $estCivilPadre;
    private $escPadre;
    private $escMadre;
    private $ingresosMenFam;
    private $NumHermanos;
    private $PerPlaticar;
    
    private $relacionPadre;
    private $relacionMadre;
    private $fuenteIngreso;
    private $habMaterias;
    private $estudiosExtTec;
    private $cualExtTec;
    private $pasatiempos;
    private $trabajas;
    private $dondeTrabajas;
    private $ocupacionTrab;
    private $porqTrab;
    private $ingresastRazTec;
    private $ingresastRazCar;
    private $obstaculosCar;
    private $alergias;
    private $cualAlergia;
    private $cronica;
    private $cronicaCual;
    private $atencionPsi;
    private $cualAtencionPsi;
    private $atencionMedica;
    private $bebidasAlc;
    private $fumador;
    private $problemLegal;
    private $motivo;
    private $deporte;
    private $cualDep;
    private $frecuenciaDept;
    private $realizado;
    private $usuario;
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


    public function setIdTutorias($idTutorias) {
        $this->idTutorias = $idTutorias;
    }

    public function getLugarViviendo() {
        return $this->lugarViviendo;
    }

    public function setLugarViviendo($lugarViviendo) {
        $this->lugarViviendo = $lugarViviendo;
    }

    public function getEstCivilPadre() {
        return $this->estCivilPadre;
    }

    public function setEstCivilPadre($estCivilPadre) {
        $this->estCivilPadre = $estCivilPadre;
    }

    public function getEscPadre() {
        return $this->escPadre;
    }

    public function setEscPadre($escPadre) {
        $this->escPadre = $escPadre;
    }

    public function getEscMadre() {
        return $this->escMadre;
    }

    public function setEscMadre($escMadre) {
        $this->escMadre = $escMadre;
    }

    public function getIngresosMenFam() {
        return $this->ingresosMenFam;
    }

    public function setIngresosMenFam($ingresosMenFam) {
        $this->ingresosMenFam = $ingresosMenFam;
    }

    public function getNumHermanos() {
        return $this->NumHermanos;
    }

    public function setNumHermanos($NumHermanos) {
        $this->NumHermanos = $NumHermanos;
    }

    public function getPerPlaticar() {
        return $this->PerPlaticar;
    }

    public function setPerPlaticar($PerPlaticar) {
        $this->PerPlaticar = $PerPlaticar;
    }

    public function getRelacionPadre() {
        return $this->relacionPadre;
    }

    public function setRelacionPadre($relacionPadre) {
        $this->relacionPadre = $relacionPadre;
    }

    public function getRelacionMadre() {
        return $this->relacionMadre;
    }

    public function setRelacionMadre($relacionMadre) {
        $this->relacionMadre = $relacionMadre;
    }

    public function getFuenteIngreso() {
        return $this->fuenteIngreso;
    }

    public function setFuenteIngreso($fuenteIngreso) {
        $this->fuenteIngreso = $fuenteIngreso;
    }

    public function getHabMaterias() {
        return $this->habMaterias;
    }

    public function setHabMaterias($habMaterias) {
        $this->habMaterias = $habMaterias;
    }

    public function getEstudiosExtTec() {
        return $this->estudiosExtTec;
    }

    public function setEstudiosExtTec($estudiosExtTec) {
        $this->estudiosExtTec = $estudiosExtTec;
    }

    public function getCualExtTec() {
        return $this->cualExtTec;
    }

    public function setCualExtTec($cualExtTec) {
        $this->cualExtTec = $cualExtTec;
    }

    public function getPasatiempos() {
        return $this->pasatiempos;
    }

    public function setPasatiempos($pasatiempos) {
        $this->pasatiempos = $pasatiempos;
    }

    public function getTrabajas() {
        return $this->trabajas;
    }

    public function setTrabajas($trabajas) {
        $this->trabajas = $trabajas;
    }

    public function getDondeTrabajas() {
        return $this->dondeTrabajas;
    }

    public function setDondeTrabajas($dondeTrabajas) {
        $this->dondeTrabajas = $dondeTrabajas;
    }

    public function getOcupacionTrab() {
        return $this->ocupacionTrab;
    }

    public function setOcupacionTrab($ocupacionTrab) {
        $this->ocupacionTrab = $ocupacionTrab;
    }

    public function getPorqTrab() {
        return $this->porqTrab;
    }

    public function setPorqTrab($porqTrab) {
        $this->porqTrab = $porqTrab;
    }

    public function getIngresastRazTec() {
        return $this->ingresastRazTec;
    }

    public function setIngresastRazTec($ingresastRazTec) {
        $this->ingresastRazTec = $ingresastRazTec;
    }

    public function getIngresastRazCar() {
        return $this->ingresastRazCar;
    }

    public function setIngresastRazCar($ingresastRazCar) {
        $this->ingresastRazCar = $ingresastRazCar;
    }

    public function getObstaculosCar() {
        return $this->obstaculosCar;
    }

    public function setObstaculosCar($obstaculosCar) {
        $this->obstaculosCar = $obstaculosCar;
    }

    public function getAlergias() {
        return $this->alergias;
    }

    public function setAlergias($alergias) {
        $this->alergias = $alergias;
    }

    public function getCualAlergia() {
        return $this->cualAlergia;
    }

    public function setCualAlergia($cualAlergia) {
        $this->cualAlergia = $cualAlergia;
    }

    public function getCronica() {
        return $this->cronica;
    }

    public function setCronica($cronica) {
        $this->cronica = $cronica;
    }

    public function getCronicaCual() {
        return $this->cronicaCual;
    }

    public function setCronicaCual($cronicaCual) {
        $this->cronicaCual = $cronicaCual;
    }

    public function getAtencionPsi() {
        return $this->atencionPsi;
    }

    public function setAtencionPsi($atencionPsi) {
        $this->atencionPsi = $atencionPsi;
    }

    public function getCualAtencionPsi() {
        return $this->cualAtencionPsi;
    }

    public function setCualAtencionPsi($cualAtencionPsi) {
        $this->cualAtencionPsi = $cualAtencionPsi;
    }

    public function getAtencionMedica() {
        return $this->atencionMedica;
    }

    public function setAtencionMedica($atencionMedica) {
        $this->atencionMedica = $atencionMedica;
    }

    public function getBebidasAlc() {
        return $this->bebidasAlc;
    }

    public function setBebidasAlc($bebidasAlc) {
        $this->bebidasAlc = $bebidasAlc;
    }

    public function getFumador() {
        return $this->fumador;
    }

    public function setFumador($fumador) {
        $this->fumador = $fumador;
    }

    public function getProblemLegal() {
        return $this->problemLegal;
    }

    public function setProblemLegal($problemLegal) {
        $this->problemLegal = $problemLegal;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
    }

    public function getDeporte() {
        return $this->deporte;
    }

    public function setDeporte($deporte) {
        $this->deporte = $deporte;
    }

    public function getCualDep() {
        return $this->cualDep;
    }

    public function setCualDep($cualDep) {
        $this->cualDep = $cualDep;
    }

    public function getFrecuenciaDept() {
        return $this->frecuenciaDept;
    }

    public function setFrecuenciaDept($frecuenciaDept) {
        $this->frecuenciaDept = $frecuenciaDept;
    }

    public function getRealizado() {
        return $this->realizado;
    }

    public function setRealizado($realizado) {
        $this->realizado = $realizado;
    }


}

?>