<?php include './plantilla.php'; ?>
<html>
    <link rel="stylesheet" type="text/css" href="..css/css.css">
    <link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
    <script src="..bootsTrap/js/jquery.min.js"></script>
    <script src="..bootsTrap/js/bootstrap.js"></script>
    <div class="container"> 
        <div class="span12" style="margin: auto " >
            <form name="cuestionario" action="guardarEncuesta.php">
                1.- &iquest;Con qu&iacute;en vives?<br>
                <input type="radio" name="LugarViviendo" value="Padre" id="RadioGroup1_0" onClick="opcion1.disabled = true">
                Padre<br>
                <input type="radio" name="LugarViviendo" value="Madre" id="RadioGroup1_1" onClick="opcion1.disabled = true">
                Madre<br> 
                <input type="radio" name="LugarViviendo" value="Ambos" id="RadioGroup1_2" onClick="opcion1.disabled = true">
                Ambos<br>
                <input type="radio" name="LugarViviendo" value="Otro" id="RadioGroup1_3" onClick="opcion1.disabled = false">
                Otro (especifica)<input name="opcion1" type="text" disabled="disabled"> <br>

                2.- &iquest;Cu&aacute;l es el estado civil de tus padres? <br>
                <input type="radio" name="EstCivilPadre" value="Casados" id="RadioGroup2_0" onClick="opcion2.disabled = true">
                Casados<br>
                <input type="radio" name="EstCivilPadre" value="Divorciados" id="RadioGroup2_1" onclick="opcion2.disabled = true">
                Divorciados<br>
                <input type="radio" name="EstCivilPadre" value="Union libre" id="RadioGroup2_2" onclick="opcion2.disabled = true">
                Uni&oacute;n Libre<br>
                <input type="radio" name="EstCivilPadre" value="Especifica" id="RadioGroup2_3" onclick="opcion2.disabled = false">
                Otro (especifica)<input name="opcion2" type="text" disabled="disabled"><br>

                3.- Que escolaridad tiene tu:<br>
                3.1.- Padre:<br>
                <input type="radio" name="EscPadre" value="Primaria" id="RadioGroup3_0" onClick="opcion3.disabled = true">
                Primaria<br>
                <input type="radio" name="EscPadre" value="Secundaria" id="RadioGroup3_1" onclick="opcion3.disabled = true">
                Secundaria<br> 
                <input type="radio" name="EscPadre" value="Bachillerato" id="RadioGroup3_2" onclick="opcion3.disabled = true">
                Bachillerato<br>
                <input type="radio" name="EscPadre" value="Profesional" id="RadioGroup3_3" onclick="opcion3.disabled = true">
                Profesional<br> 
                <input type="radio" name="EscPadre" value="Otro" id="RadioGroup3_4" onclick="opcion3.disabled = false">
                Otro (especifica) 
                <input name="opcion3" type="text" disabled="disabled"><br>

                3.2.- Madre:<br>
                <input type="radio" name="EscMadre" value="Primaria" id="RadioGroup4_0" onClick="opcion3y2.disabled = true">
                Primaria<br>
                <input type="radio" name="EscMadre" value="Secundaria" id="RadioGroup4_1" onclick="opcion3y2.disabled = true">
                Secundaria<br>
                <input type="radio" name="EscMadre" value="Bachillerato" id="RadioGroup4_2" onclick="opcion3y2.disabled = true">
                Bachillerato<br>
                <input type="radio" name="EscMadre" value="Profesional" id="RadioGroup4_3" onclick="opcion3y2.disabled = true">
                Profesional<br> 
                <input type="radio" name="EscMadre" value="Otro" id="RadioGroup4_4" onclick="opcion3y2.disabled = false">
                Otro (especifica) 
                <input name="opcion3y2" type="text" disabled="disabled"><br>

                4.- &iquest;Cu&aacute;nto es el ingreso ec&oacute;nomico familiar mensual aproximado de tu familia?<br>
                $<input type="text" name="IngresosMenFam"><br>

                5.- &iquest;Cuantos hermanos/as son en tu familia incluy&eacute;ndote?<br>
                <input type="text" name="pregunta5"><br>

                6.- &iquest;Con qui&eacute;n platicas cuando tienes un problema personal?<br>
                <input type="radio" name="Pregunta6" value="Padre" id="RadioGroup5_0" onClick="opcion6.disabled = true">
                Padre<br>
                <input type="radio" name="Pregunta6" value="Madre" id="RadioGroup5_1" onclick="opcion6.disabled = true">
                Madre<br> 
                <input type="radio" name="Pregunta6" value="Ambos" id="RadioGroup5_2" onclick="opcion6.disabled = true">
                Ambos<br>
                <input type="radio" name="Pregunta6" value="Hermanos" id="RadioGroup5_3" onclick="opcion6.disabled = true">
                Hermanos<br> 
                <input type="radio" name="Pregunta6" value="Otro" id="RadioGroup5_4" onclick="opcion6.disabled = false">
                Otro (Especifica)<input name="opcion6" type="text" disabled="disabled">  <br>

                7.- Como te llevas con tu:<br>
                7.1.- Padre<br>
                <input type="radio" name="RelacionPadre" value="Bien" id="RadioGroup6_0" onClick="opcion6.disabled = true">
                Bien<br>
                <input type="radio" name="RelacionPadre" value="Regular" id="RadioGroup6_1" onclick="opcion6.disabled = true">
                Regular<br>
                <input type="radio" name="RelacionPadre" value="Mal" id="RadioGroup6_2" onclick="opcion6.disabled = true">
                Mal<br>
                <input type="radio" name="RelacionPadre" value="No Convivo" id="RadioGroup6_3" onclick="opcion6.disabled = true">
                No convivo
                <br>

                7.2.- Madre<br>
                <input type="radio" name="RelacionPadre" value="Bien" id="RadioGroup7_0" onClick="opcion6y2.disabled = true">
                Bien<br>
                <input type="radio" name="RelacionPadre" value="Regular" id="RadioGroup7_1" onclick="opcion6y2.disabled = true">
                Regular<br>
                <input type="radio" name="RelacionPadre" value="Mal" id="RadioGroup7_2" onclick="opcion6y2.disabled = true">
                Mal<br>
                <input type="radio" name="RelacionPadre" value="No Convivo" id="RadioGroup7_3" onclick="opcion6y2.disabled = true">
                No convivo
                <br>

                7.3.- Hermanos/as<br>
                <input type="radio" name="RelacionPadre" value="Bien" id="RadioGroup8_0" onClick="opcion6y3.disabled = true">
                Bien<br>
                <input type="radio" name="RelacionPadre" value="Regular" id="RadioGroup8_1" onclick="opcion6y3.disabled = true">
                Regular<br>
                <input type="radio" name="RelacionPadre" value="Mal" id="RadioGroup8_2" onclick="opcion6y3.disabled = true">
                Mal<br>
                <input type="radio" name="RelacionPadre" value="No Convivo" id="RadioGroup8_3" onclick="opcion6y3.disabled = true">
                No convivo
                <br>

                8.- &iquest;Quien sostiene econ&oacute;micamente tus estudios?<br>
                <input type="radio" name="FuenteIngreso" value="Padre" id="RadioGroup9_0" onClick="opcion7.disabled = true">
                Padre<br>
                <input type="radio" name="FuenteIngreso" value="Madre" id="RadioGroup9_1" onclick="opcion7.disabled = true">
                Madre<br> 
                <input type="radio" name="FuenteIngreso" value="Ambos" id="RadioGroup9_2" onclick="opcion7.disabled = true">
                Ambos<br>
                <input type="radio" name="FuenteIngreso" value="Hermanos/as" id="RadioGroup9_3" onclick="opcion7.disabled = true">
                Hermanos/as<br>
                <input type="radio" name="FuenteIngreso" value="Otro" id="RadioGroup9_4" onclick="opcion7.disabled = false">
                Otro (Especifica)<input name="opcion7" type="text" disabled="disabled"><br>

                9.- Menciona las escuelas donde has estudiado el bachillerato, indicando los grados estudiados en caso de haber estudiado en m&aacute;s de una escuela.<br>
                <table width="400" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                        <th width="120" scope="col">Nombre de la escuela</th>
                        <th width="120" scope="col">Estado donde se ubica</th>
                        <th width="120" scope="col">Grado cursado</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="textfield" id="textfield"></td>
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

                10.- &iquest;Que materias te gustan m&aacute;s?<br>
                <input type="text" name="HabMaterias"><br>

                11.- &iquest;Realizas otros estudios fuera de tecnol&oacute;gico?<br>
                <input type="radio" name="EstudiosExtTec" value="Si" id="RadioGroup10_0" onClick="opcion10.disabled = false">
                Si (especifica)
                <!--Cuadro de texto-->
                <input name="opcion10" type="text" disabled="disabled"><br>  
                <input type="radio" name="EstudiosExtTec" value="No" id="RadioGroup10_1" onclick="opcion10.disabled = true">
                No
                <br>

                12.- Marca dos actividades que realices como pasatiempo:<br> 
                <table width="500"  border="0" cellspacing="0" cellpadding="0">
                    <tr>    
                        <td><input type="checkbox" name="Pasatiempos" value="Cine" id="CheckboxGroup1_0">Cine</td>
                        <td><input type="checkbox" name="Pasatiempos" value="Conciertos" id="CheckboxGroup1_1">Conciertos</td> 
                        <td><input type="checkbox" name="Pasatiempos" value="Actividades Culturales" id="CheckboxGroup1_2">Actividades Culturales</td>
                    </tr>
                    <tr> 
                        <td><input type="checkbox" name="Pasatiempos" value="Bibliotecas" id="CheckboxGroup1_3">
                            Bibliotecas</td> 
                        <td><input type="checkbox" name="Pasatiempos" value="Bailar" id="CheckboxGroup1_4">
                            Bailar</td> 
                        <td><input type="checkbox" name="Pasatiempos" value="Fiestas" id="CheckboxGroup1_5">
                            Fiestas</td> 
                    </tr>
                    <tr> 
                        <td><input type="checkbox" name="Pasatiempos" value="Video Juegos" id="CheckboxGroup1_6">
                            Video Juegos</td> 
                        <td><input type="checkbox" name="Pasatiempos" value="Compras" id="CheckboxGroup1_7">
                            Compras</td> 
                        <td><input type="checkbox" name="Pasatiempos" value="Deportes" id="CheckboxGroup1_8">
                            Deportes</td>
                    </tr>
                </table>
                <br>

                13.- &iquest;Trabajas actualmente?<br>
                <input type="radio" name="Trabajas" value="opción1" id="RadioGroup11_0" onClick="opcion12y1.disabled = false, opcion12y2.disabled = false, opcion12y3.disabled = false" >
                Si<br>
                <input type="radio" name="Trabajas" value="opción2" id="RadioGroup11_1" onClick="opcion12y1.disabled = true, opcion12y2.disabled = true, opcion12y3.disabled = true" >
                No<br>
                13.1.- &iquest;En que trabajas?<br>
                <input name="opcion12y1" type="text" disabled="disabled"><br>
                13.2.- &iquest;Cu&aacute;l es el motivo por el cual laboras?<br>
                <input name="opcion12y2" type="text" disabled="disabled"><br>
                13.3.- &iquest;Ocupaci&oacute;n en el trabajo?<br>
                <input name="opcion12y3" type="text" disabled="disabled"><br>


                14.- &iquest;Cu&aacute;l es la razon por la que ingresaste al tecnol&oacute;gico?
                <br><input type="radio" name="IngresastRazTec" value="opción1" id="RadioGroup12_0" onClick="opcion13.disabled = true">
                Porque esta es la escuela que desean mis padres.<br>
                <input type="radio" name="IngresastRazTec" value="opción2" id="RadioGroup12_1" onclick="opcion13.disabled = true">
                porque no es cara la colegiatura.<br>
                <input type="radio" name="IngresastRazTec" value="opción3" id="RadioGroup12_2" onclick="opcion13.disabled = true">
                Porque la instituci&oacute;n tiene prestigio<br>
                <input type="radio" name="IngresastRazTec" value="opción4" id="RadioGroup12_3" onclick="opcion13.disabled = true">
                porque tiene buenos egresados. <br>
                <input type="radio" name="IngresastRazTec" value="opción4" id="RadioGroup12_4" onclick="opcion13.disabled = true">
                Porque no alcance cupo en otra escuela. <br>
                <input type="radio" name="IngresastRazTec" value="opción5" id="RadioGroup12_5" onclick="opcion13.disabled = false">
                Otro(Especifica) 
                <input name="opcion13" type="text" disabled="disabled"><br>

                15.- &iquest;Cu&aacute;les son las razones por la que ingresaste a la carrera?<br>
                <input type="radio" name="IngresastRazCar" value="opción2" id="RadioGroup13_0" onclick="opcion14.disabled = true">
                Porque espero ganar mucho dinero con ella.<br> 
                <input type="radio" name="IngresastRazCar" value="opción3" id="RadioGroup13_1" onclick="opcion14.disabled = true">
                Porque les la carrera que he elegido y me apasiona<br>
                <input type="radio" name="IngresastRazCar" value="opción4" id="RadioGroup13_2" onclick="opcion14.disabled = true">
                Por su plan de estudios. <br>
                <input type="radio" name="IngresastRazCar" value="opción4" id="RadioGroup13_3" onclick="opcion14.disabled = true">
                Porque no hubo cupo en la carrera que me interesa. <br>
                <input type="radio" name="IngresastRazCar" value="opción4" id="RadioGroup13_4" onclick="opcion14.disabled = true">
                Porque es la carrera que desean mis padres.<br> 
                <input type="radio" name="IngresastRazCar" value="opción1" id="RadioGroup13_5" onClick="opcion14.disabled = true">
                Porque es la &uacute;nica escuela que da esta carrera.<br>
                <input type="radio" name="IngresastRazCar" value="opción5" id="RadioGroup13_6" onclick="opcion14.disabled = false">
                Otro (Especifica) 
                <input name="opcion14" type="text" disabled="disabled">  <br>

                16.- &iquest;Padece alguna alergia?<br>
                <input type="radio" name="Alergias" value="opción1" id="RadioGroup14_0" onClick="CualAlergia.disabled = false">
                Si
                &iquest;Cu&aacute;l?<input name="CualAlergia" type="text" disabled="disabled"><br>
                <input type="radio" name="Alergias" value="opción2" id="RadioGroup14_1" onclick="CualAlergia.disabled = true">
                No
                <br>

                17.- &iquest;Padece alguna enfermedad cr&oacute;nica?<br>
                <input type="radio" name="Cronica" value="opción1" id="RadioGroup15_0" onClick="CronicaCual.disabled = false">
                Si
                &iquest;Cu&aacute;l?<input name="CronicaCual" type="text" disabled="disabled"><br>
                <input type="radio" name="Cronica" value="opción2" id="RadioGroup15_1" onclick="CronicaCual.disabled = true">
                No
                <br>

                18.- &iquest;Has recibido atenci&oacute;n psicol&oacute;gica?<br>
                <input type="radio" name="AtencionPsi" value="opción1" id="RadioGroup16_0" onClick="CualAtencionPsi.disabled = false">
                Si
                (especifica de que tipo)<input name="CualAtencionPsi" type="text" disabled="disabled"><br>
                <input type="radio" name="AtencionPsi" value="opción2" id="RadioGroup16_1" onclick="CualAtencionPsi.disabled = true">
                No 
                <br>

                19.- &iquest;D&oacute;nde recibes atenci&oacute;n medica?<br>
                <input type="radio" name="AtencionMedica" value="opción1" id="RadioGroup17_0">
                IMSS<br>
                <input type="radio" name="AtencionMedica" value="opción2" id="RadioGroup17_1">
                ISSSTE<br> 
                <input type="radio" name="AtencionMedica" value="opción3" id="RadioGroup17_2">
                H. Militar<br>
                <input type="radio" name="AtencionMedica" value="opción4" id="RadioGroup17_3">
                Particular<br>

                20.- &iquest;Fumas?<br>
                <input type="radio" name="Fumador" value="opción1" id="RadioGroup18_0">
                Si<br>
                <input type="radio" name="Fumador" value="opción2" id="RadioGroup18_1">
                No 
                <br>

                21.- &iquest;Consumes bebidas embriagantes?<br>
                <input type="radio" name="BebidasAlc" value=opción1" id="RadioGroup19_0">
                Si<br>
                <input type="radio" name="BebidasAlc" value="opción2" id="RadioGroup19_1">
                No 
                <br>

                22.- &iquest;Has tenido problemas legales?<br> 
                <input type="radio" name="ProblemLegal" value="opción1" id="RadioGroup20_0" onClick="Motivo.disabled = false">
                Si
                (especifica el motivo) <input name="Motivo" type="text" disabled="disabled"><br>
                <input type="radio" name="ProblemLegal" value="opción2" id="RadioGroup20_1" onclick="Motivo.disabled = true">
                No 
                <br>

                23.- &iquest;Practicas al&uacute;n deporte?<br>
                <input type="radio" name="Deporte" value="opción1" id="RadioGroup21_0" onClick="CualDep.disabled = false, FrecuenciaDept.disabled = false">
                Si<br>
                <input type="radio" name="Deporte" value="opción2" id="RadioGroup21_1" onclick="CualDep.disabled = true, FrecuenciaDept.disabled = true">
                No <br>
                23.1.- &iquest;Cu&aacute;l?<br><input name="CualDep" type="text" disabled="disabled">  <br>
                23.2.- &iquest;Con que frecuencia lo realizas?<br><input name="FrecuenciaDept" type="text" disabled="disabled"><br>
                <input type="submit" name="guardar" value="Guardar" >
            </form>
        </div>
    </div>
</html>
