<?php include './plantilla.php';
?>
<html>

    <link rel="stylesheet" type="text/css" href="..css/css.css">
    <link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
    <script src="..bootsTrap/js/jquery.min.js"></script>
    <script src="..bootsTrap/js/bootstrap.js"></script>

    <form name="cuestionario" action="guardarEncuesta.php">
        1.-¿Con quien vives?<br>
        <input type="radio" name="LugarViviendo" value="Padre" id="RadioGroup1_0" onClick="opcion1.disabled = true">
        Padre
        <input type="radio" name="LugarViviendo" value="Madre" id="RadioGroup1_1" onClick="opcion1.disabled = true">
        Madre 
        <input type="radio" name="LugarViviendo" value="Ambos" id="RadioGroup1_3" onClick="opcion1.disabled = true">
        Ambos
        <input type="radio" name="LugarViviendo" value="Especifica" id="RadioGroup1_2" onClick="opcion1.disabled = false">
        especifica <input name="opcion1" type="text" disabled="disabled"> <br>

        2.-¿Cual es el estado civil de tus padres? <br>
        <input type="radio" name="EstCivilPadre" value="Casados" id="RadioGroup1_0" onClick="opcion2.disabled = true">
        Casados
        <input type="radio" name="EstCivilPadre" value="Divorciados" id="RadioGroup1_1" onclick="opcion2.disabled = true">
        Divorciados
        <input type="radio" name="EstCivilPadre" value="Union libre" id="RadioGroup1_2" onclick="opcion2.disabled = true">
        Union libre
        <input type="radio" name="EstCivilPadre" value="Especifica" id="RadioGroup1_2" onclick="opcion2.disabled = false">
        otro(especifica) <input name="opcion2" type="text" disabled="disabled">  <br>

        3.-¿Que escolaridad tiene tu.. <br>
        3.1.-padre?<br>
            <input type="radio" name="EscPadre" value="Primaria" id="RadioGroup1_0" onClick="opcion3.disabled = true">
        Primaria
        <input type="radio" name="EscPadre" value="Secundaria" id="RadioGroup1_1" onclick="opcion3.disabled = true">
        Secundaria 
        <input type="radio" name="EscPadre" value="Bachillerato" id="RadioGroup1_2" onclick="opcion3.disabled = true">
        Bachillerato
        <input type="radio" name="EscPadre" value="Profesional" id="RadioGroup1_2" onclick="opcion3.disabled = true">
        Profesional 
        <input type="radio" name="EscPadre" value="Otro" id="RadioGroup1_2" onclick="opcion3.disabled = false">
        Otro 
        <input name="opcion3" type="text" disabled="disabled">  <br>

        3.2.-madre?<br>
        <input type="radio" name="EscMadre" value="Primaria" id="RadioGroup1_0" onClick="opcion3y2.disabled = true">
        Primaria
        <input type="radio" name="EscMadre" value="Secundaria" id="RadioGroup1_1" onclick="opcion3y2.disabled = true">
        Secundaria 
        <input type="radio" name="EscMadre" value="Bachillerato" id="RadioGroup1_2" onclick="opcion3y2.disabled = true">
        Bachillerato
        <input type="radio" name="EscMadre" value="Profesional" id="RadioGroup1_2" onclick="opcion3y2.disabled = true">
        Profesional 
        <input type="radio" name="EscMadre" value="Otro" id="RadioGroup1_2" onclick="opcion3y2.disabled = false">
        Otro 
        <input name="opcion3y2" type="text" disabled="disabled">  <br>

        4.-¿Cuanto es el ingreso econocmico familiar mensual aproximado de tu familia?<br>
        $<input type="text" name="IngresosMenFam"> <br>

        5.-Cuantos hermanos son en tu familia incluyéndote?<br>
        <input type="text" name="pregunta5"><br>

        6.-¿con quien platicas cuando tienes un problema personal?<br>
        <input type="radio" name="Pregunta6" value="Padre" id="RadioGroup1_0" onClick="opcion6.disabled = true">
        Padre
        <input type="radio" name="Pregunta6" value="Madre" id="RadioGroup1_1" onclick="opcion6.disabled = true">
        Madre 
        <input type="radio" name="Pregunta6" value="Ambos" id="RadioGroup1_2" onclick="opcion6.disabled = true">
        Ambos
        <input type="radio" name="Pregunta6" value="Hermanos" id="RadioGroup1_2" onclick="opcion6.disabled = true">
        Hermanos 
        <input type="radio" name="Pregunta6" value="Otro" id="RadioGroup1_2" onclick="opcion6.disabled = false">
        Otro(Especifica) 
        <input name="opcion6" type="text" disabled="disabled">  <br>



        6.-¿Cómo te llevas con tu…<br>
        6.1 Padre ?<br>
        <input type="radio" name="RelacionPadre" value="Bien" id="RadioGroup1_0">
        Bien
        <input type="radio" name="RelacionPadre" value="Regular" id="RadioGroup1_1">
        Regular
        <input type="radio" name="RelacionPadre" value="Mal" id="RadioGroup1_2">
        Mal
        <input type="radio" name="RelacionPadre" value="No convivo" id="RadioGroup1_2">
        No convivo
        <br>

        6.2 Madre?<br>
        <input type="radio" name="RelacionMadre" value="Bien" id="RadioGroup1_0" onClick="opcion6y2.disabled = true">
        Bien
        <input type="radio" name="RelacionMadre" value="Regular" id="RadioGroup1_1" onclick="opcion6y2.disabled = true">
        Regular 
        <input type="radio" name="RelacionMadre" value="Mal" id="RadioGroup1_2" onclick="opcion6y2.disabled = true">
        Mal
        <input type="radio" name="RelacionMadre" value="No convivo" id="RadioGroup1_2" onclick="opcion6y2.disabled = true">
        No convivo
        <br>

        6.3 Hermanos?<br>
        <input type="radio" name="Pregunta6y3" value="Bien" id="RadioGroup1_0" onClick="opcion6y3.disabled = true">
        Bien
        <input type="radio" name="Pregunta6y3" value="Regular" id="RadioGroup1_1" onclick="opcion6y3.disabled = true">
        Regular 
        <input type="radio" name="Pregunta6y3" value="Mal" id="RadioGroup1_2" onclick="opcion6y3.disabled = true">
        Mal
        <input type="radio" name="Pregunta6y3" value="No convivo" id="RadioGroup1_2" onclick="opcion6y3.disabled = true">
        No convivo
        <br>

        7.-¿Quién sostiene económicamente tus estudios?<br>
        <input type="radio" name="FuenteIngreso" value="Padre" id="RadioGroup1_0" onClick="opcion7.disabled = true">
        Padre
        <input type="radio" name="FuenteIngreso" value="Madre" id="RadioGroup1_1" onclick="opcion7.disabled = true">
        Madre 
        <input type="radio" name="FuenteIngreso" value="Ambos" id="RadioGroup1_2" onclick="opcion7.disabled = true">
        Ambos
        <input type="radio" name="FuenteIngreso" value="Hermanos" id="RadioGroup1_2" onclick="opcion7.disabled = true">
        Hermanos
        <input type="radio" name="FuenteIngreso" value="Otro" id="RadioGroup1_2" onclick="opcion7.disabled = false">
        Otro (Especifica)  
        <input name="opcion7" type="text" disabled="disabled">  <br>



        8.- Menciona las escuelas donde has estudiado el bachillerato, indicando los grados estudiados en caso de haber estudiado en mas de una escuela.<br>
        <table width="440" border="1" cellspacing="100" cellpadding="100">
            <tr>
                <th width="144" scope="col">Nombre de la escuela</th>
                <th width="144" scope="col">Estado donde se encuentra</th>
                <th width="144" scope="col">Grados Cursados</th>
            </tr>
            <tr>
                <td><input type="text" name="textfield" id="textfield">

                </td>
                <td><input type="text" name="textfield2" id="textfield2"></td>
                <td><input type="text" name="textfield3" id="textfield3"></td>
            </tr>
            <tr>
                <td><input type="text" name="textfield4" id="textfield4"></td>
                <td><input type="text" name="textfield6" id="textfield6"></td>
                <td><input type="text" name="textfield8" id="textfield8"></td>
            </tr>
            <tr>
                <td><input type="text" name="textfield5" id="textfield5"></td>
                <td><input type="text" name="textfield7" id="textfield7"></td>
                <td><input type="text" name="textfield9" id="textfield9"></td>
            </tr>
        </table>

        9.-Que materias te gustan mas?<br>
        <input type="text" name="HabMaterias"> <br>

        10.-Realizas otros estudios fuera de tecnológico?<br>
        <input type="radio" name="EstudiosExtTec" value="Si" id="RadioGroup1_0" onClick="opcion10.disabled = false">
        Si (Especifica)
        <!--        Cuadro de texto-->
        <input name="opcion10" type="text" disabled="disabled">  
        <input type="radio" name="EstudiosExtTec" value="No" id="RadioGroup1_1" onclick="opcion10.disabled = true">
        No
        <br>

        11.-Marca dos actividades que realices como pasatiempo<br><br>
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_0">
        Cine
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_1">
        Conciertos 
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_2">
        Actividades Culturales
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_3">
        bibliotecas 
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_4">
        bailar 
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_5">
        fiestas 
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_5">
        VideoJuegos 
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_5">
        Compras 
        <input type="checkbox" name="Pasatiempos" value="casilla de verificación " id="CheckboxGroup1_5">
        Deportes
        <br><br>

        12.-Trabajas actualmente?<br>
        <input type="radio" name="Trabajas" value="Si" id="RadioGroup1_0" onClick="DondeTrabajas.disabled = false, PorqTrab.disabled = false, OcupacionTrab.disabled = false">
        Si
        <input type="radio" name="Trabajas" value="No" id="RadioGroup1_1" onClick="DondeTrabajas.disabled = true, PorqTrab.disabled = true, OcupacionTrab.disabled = true">
        No <br>

        12.1.- En que trabajas?<br>
        <input name="DondeTrabajas" type="text" disabled="disabled" >  <br>
        12.2.- ¿cual es el motivo por el cual laboras?<br>
        <input name="PorqTrab" type="text" disabled="disabled">  <br>
        12.3.- ¿Ocupacion en el trabajo?<br>
        <input name="OcupacionTrab" type="text" disabled="disabled">  <br>

        13.-Cuales son las razones por la que ingrsaste al tecnológico?
        <br><input type="radio" name="IngresastRazTec" value="Porque esta es la escuela que desean mis padres." id="RadioGroup1_0" onClick="opcion13.disabled = true">
        Porque esta es la escuela que desean mis padres.<br>
        <input type="radio" name="IngresastRazTec" value="porque no es cara la colegiatura." id="RadioGroup1_1" onclick="opcion13.disabled = true">
        Porque no es cara la colegiatura.<br>
        <input type="radio" name="IngresastRazTec" value="Porque la institucion tiene prestigio." id="RadioGroup1_2" onclick="opcion13.disabled = true">
        Porque la institucion tiene prestigio.<br>
        <input type="radio" name="IngresastRazTec" value="Porque tiene buenos egresados." id="RadioGroup1_2" onclick="opcion13.disabled = true">
        Porque tiene buenos egresados.<br>
        <input type="radio" name="IngresastRazTec" value="Porque no alcanze cupo en otra escuela." id="RadioGroup1_2" onclick="opcion13.disabled = true">
        Porque no alcanze cupo en otra escuela.<br>
        <input type="radio" name="IngresastRazTec" value="Otro" id="RadioGroup1_2" onclick="opcion13.disabled = false">
        Otro(Especifica) 
        <input name="opcion13" type="text" disabled="disabled"><br>



        14.- Cuales son las razones por la que ingresaste a la carrera?<br>
        <input type="radio" name="IngresastRazCar" value="Porque espero ganar mucho dinero con ella." id="RadioGroup1_1" onclick="opcion14.disabled = true">
        Porque espero ganar mucho dinero con ella.<br> 
        <input type="radio" name="IngresastRazCar" value="Porque les la carrera que he elegido y me apasiona." id="RadioGroup1_2" onclick="opcion14.disabled = true">
        Porque les la carrera que he elegido y me apasiona.<br>
        <input type="radio" name="IngresastRazCar" value="Por su plan de estudios." id="RadioGroup1_2" onclick="opcion14.disabled = true">
        Por su plan de estudios. <br>
        <input type="radio" name="IngresastRazCar" value="Porque no hubo cupo en la carrera que me interesa." id="RadioGroup1_2" onclick="opcion14.disabled = true">
        Porque no hubo cupo en la carrera que me interesa. <br>
        <input type="radio" name="IngresastRazCar" value="Porque es la carrera que desena mis padres." id="RadioGroup1_2" onclick="opcion14.disabled = true">
        Porque es la carrera que desena mis padres.<br> 
        <input type="radio" name="IngresastRazCar" value="Porque es la unica escuela que da esta carrera." id="RadioGroup1_0" onClick="opcion14.disabled = true">
        Porque es la unica escuela que da esta carrera.<br>
        <input type="radio" name="IngresastRazCar" value="Otro" id="RadioGroup1_2" onclick="opcion14.disabled = false">
        Otro(Especifica) 
        <input name="opcion14" type="text" disabled="disabled"><br>

        15.- ¿Padece alguna alergia?<br>
        <input type="radio" name="Alergias" value="Si" id="RadioGroup1_0" onClick="CualAlergia.disabled = false">
        Si
        <input type="radio" name="Alergias" value="No" id="RadioGroup1_1" onclick="CualAlergia.disabled = true">
        No<br>
        ¿cual?<input name="CualAlergia" type="text" disabled="disabled"> </label> <br>

        16.- Padece alguna enfermedad crónica? <br>
        <input type="radio" name="Cronica" value="Si" id="RadioGroup1_0" onClick="CronicaCual.disabled = false">
        Si
        <input type="radio" name="Cronica" value="No" id="RadioGroup1_1" onclick="CronicaCual.disabled = true">
        No<br>
        ¿Cuál?  <input name="CronicaCual" type="text" disabled="disabled">  <br>

        17.- Has recibido atención psicológica? 
        <input type="radio" name="AtencionPsi" value="Si" id="RadioGroup1_0" onClick="CualAtencionPsi.disabled = false">
        Si
        <input type="radio" name="AtencionPsi" value="No" id="RadioGroup1_1" onclick="CualAtencionPsi.disabled = true">
        No 
        <br>
        Especifica que tipo <input name="CualAtencionPsi" type="text" disabled="disabled"> <br>

        18.-Donde recibes atención medica?<br>
        <input type="radio" name="AtencionMedica" value="IMSS" id="RadioGroup1_0" onClick="AtencionMedica.disabled = true">
        IMSS
        <input type="radio" name="AtencionMedica" value="ISSSTE" id="RadioGroup1_1" onclick="AtencionMedica.disabled = true">
        ISSSTE 
        <input type="radio" name="AtencionMedica" value="H. Militar" id="RadioGroup1_2" onclick="AtencionMedica.disabled = true">
        H. Militar
        <input type="radio" name="AtencionMedica" value="Particular" id="RadioGroup1_2" onclick="AtencionMedica.disabled = true">
        Particular <br>

        19-. ¿fumas?<br>
        <input type="radio" name="Fumador" value="Si" id="RadioGroup1_0" onClick="opcion19.disabled = false">
        Si
        <input type="radio" name="Fumador" value="No" id="RadioGroup1_1" onclick="opcion19.disabled = true">
        No 
        <br>

        20.-Consumes bebidas embriagantes?<br>
        <input type="radio" name="BebidasAlc" value="Si" id="RadioGroup1_0" onClick="opcion20.disabled = false">
        Si
        <input type="radio" name="BebidasAlc" value="No" id="RadioGroup1_1" onclick="opcion20.disabled = true">
        No 
        <br>

        21.-Has tenido problemas legales?<br>
        <input type="radio" name="ProblemLegal" value="Si" id="RadioGroup1_0" onClick="Motivo.disabled = false">
        Si
        <input type="radio" name="ProblemLegal" value="No" id="RadioGroup1_1" onclick="Motivo.disabled = true">
        No 
        <br>
        especifica el motivo <input name="Motivo" type="text" disabled="disabled">  <br>

        22.- Practicas algun deporte?
        <input type="radio" name="Deporte" value="Si" id="RadioGroup1_0" onClick="CualDep.disabled = false, FrecuenciaDept.disabled = false">
        Si
        <input type="radio" name="Deporte" value="No" id="RadioGroup1_1" onclick="CualDep.disabled = true, FrecuenciaDept.disabled = true">
        No <br>
        Cual? <input name="CualDep" type="text" disabled="disabled">  <br>
        Conque frecuencia lo realizas?<input name="FrecuenciaDept" type="text" disabled="disabled"> <br>

        <input type="submit" name="guardar" value="Guardar" >
    </form>
</html>