<?php
include '../clases/tutorias.php';
include '../DaoConnection/coneccion.php';
$tutorias = new tutorias();
$dao = new daoServicio();
$tutorias->setIdTutorias($_GET["IdTutorias"]);
$tutorias->setLugarViviendo($_GET["LugarViviendo"]);
$tutorias->setEstCivilPadre($_GET["EstCivilPadre"]);
$tutorias->setEscPadre($_GET["EscPadre"]);
$tutorias->setEscMadre($_GET["EscMadre"]);
$tutorias->setIngresosMenFam($_GET["ngresosMenFam"]);
$tutorias->setRelacionPadre($_GET["RelacionPadre"]);
$tutorias->setRelacionMadre($_GET["RelacionMadre"]);
$tutorias->setFuenteIngreso($_GET["FuenteIngreso"]);
$tutorias->setHabMaterias($_GET["HabMaterias"]);
$tutorias->setEstudiosExtTec($_GET["EstudiosExtTec"]);
$tutorias->setCualExtTec($_GET["CualExtTec"]);
$tutorias->setPasatiempos($_GET["Pasatiempos"]);
$tutorias->setTrabajas($_GET["Trabajas"]);
$tutorias->setDondeTrabajas($_GET["DondeTrabajas"]);
$tutorias->setOcupacionTrab($_GET["OcupacionTrab"]);
$tutorias->setPorqTrab($_GET["PorqTrab"]);
$tutorias->setIngresastRazTec($_GET["IngresastRazTec"]);
$tutorias->setIngresastRazCar($_GET["IngresastRazCar"]);
$tutorias->setAlergias($_GET["Alergias"]);
$tutorias->setCualAlergia($_GET["CualAlergia"]);
$tutorias->setCronica($_GET["Cronica"]);
$tutorias->setCronicaCual($_GET["CronicaCual"]);
$tutorias->setAtencionPsi($_GET["AtencionPsi"]);
$tutorias->setCualAtencionPsi($_GET["CualAtencionPsi"]);
$tutorias->setAtencionMedica($_GET["AtencionMedica"]);
$tutorias->setBebidasAlc($_GET["BebidasAlc"]);
$tutorias->setFumador($_GET["Fumador"]);
$tutorias->setProblemLegal($_GET["ProblemLegal"]);
$tutorias->setMotivo($_GET["Motivo"]);
$tutorias->setDeporte($_GET["Deporte"]);
$tutorias->setCualDep($_GET["CualDep"]);
$tutorias->setFrecuenciaDept($_GET["FrecuenciaDept"]);
$tutorias->setRealizado($_GET["Realizado"]);
$dao->guardarEncuesta($tutorias);


?>
