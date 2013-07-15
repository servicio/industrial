<link type="text/css" rel="stylesheet" href="../css/rhinoslider-1.05.css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/rhinoslider-1.05.min.js"></script>
<script type="text/javascript" src="../js/mousewheel.js"></script>
<script type="text/javascript" src="../js/easing.js"></script> 
<script type="text/javascript">



            $(document).ready(function() {
                $('#slider').rhinoslider({
                    controlsPlayPause: false,
                    showControls: 'always',
                    showBullets: 'always',
                    controlsMousewheel: false,
                    prevText: 'Back',
                    nextText:'Proceed',
		    slidePrevDirection: 'toRight',
		slideNextDirection: 'toLeft'
                });


                $(".rhino-prev").hide();
                $('.rhino-next').after('<a class="form-submit" href="javascript:void(0);" >Proceed</a>');
                $(".rhino-next").hide();




               





            });

            $('.form-submit').live("click",function(){

                $('.form-error').html("");

                var current_tab = $('#slider').find('.rhino-active').attr("id");

                switch(current_tab){
                    case 'rhino-item0':
                        step1_validation();
                        break;
                    case 'rhino-item1':
                        step2_validation();
                        break;
                    case 'rhino-item2':
                        step3_validation();
                        break;
                }
            });

            var step1_validation = function(){

                var err = 0;

                if($('#fname').val() == ''){
                    $('#fname').parent().parent().find('.form-error').html("First Name is Required");
                    err++;
                }
                if($('#lname').val() == ''){
                    $('#lname').parent().parent().find('.form-error').html("Last Name is Required");
                    err++;
                }
                if($('#gender').val() == '0'){
                    $('#gender').parent().parent().find('.form-error').html("Please Select Gender");
                    err++;
                }
                if(err == 0){
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }


            };

            var step2_validation = function(){
                var err = 0;

                if($('#username').val() == ''){
                    $('#username').parent().parent().find('.form-error').html("Username is Required");
                    err++;
                }
                if($('#pass').val() == ''){
                    $('#pass').parent().parent().find('.form-error').html("Password is Required");
                    err++;
                }
                if($('#cpass').val() == ''){
                    $('#cpass').parent().parent().find('.form-error').html("confirm Password is Required");
                    err++;
                }
                
                if(err == 0){
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }

            };

            var step3_validation = function(){
                var err = 0;

                if($('#email').val() == ''){
                    $('#email').parent().parent().find('.form-error').html("Email is Required");
                    err++;
                }
                if(err == 0){
                    $(".rhino-active-bullet").removeClass("step-error").addClass("step-success");
                    $(".rhino-next").show();
                    $('.form-submit').hide();
                    $('.rhino-next').trigger('click');
                }else{
                    $(".rhino-active-bullet").removeClass("step-success").addClass("step-error");
                }

            };
        </script>
 <style type="text/css">
            body { background-color:#fff; }
          
            #slider {

                background: #fff;
                /*IE bugfix*/
               /*relleno*/ padding:0;
                margin:0;
                width:700px;
                height:400px;	

            }

            #slider li { list-style:none; }

            #page {
                width:600px;
                margin:50px auto;
            }

            #slider{
                color: #000;
                background:#f4f4f4;
                font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
                font-size:12px;
            }

            .form-step{

                padding:16% 3% !important;


            }

            .form-submit{
                cursor: pointer;
                display: block;
                position: absolute;
                right: 0;
                bottom: 0;
                -moz-user-select: none;
                background: none repeat scroll 0 0 #6F95DC;
                border-radius: 5px 5px 5px 5px;
                color: #FFFFFF;
                display: block;
                margin: 0 20px 20px;
                padding: 10px;
                text-align: center;
                width: 125px;
                z-index: 10;
                font-weight: bold;
                text-decoration: none;
                background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#94b9e9), to(#4870d2));
                background-image: -moz-linear-gradient(#94b9e9, #4870d2);
                background-image: -webkit-linear-gradient(#94b9e9, #4870d2);
                background-image: -o-linear-gradient(#94b9e9, #4870d2);
                filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#94b9e9, endColorstr=#4870d2)";
                -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#94b9e9, endColorstr=#4870d2)";
                font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;

            }

            .errorDisplay{
                border:2px solid red;
            }

            .form-left{
                color: #717171;
                float: left;
                font-size: 13px;
                font-weight: bold;
                padding: 5px;
                width: 200px;
            }
            .form-right{
                float: left;
                width: 214px;
            }
            .row{
                float: left;
                margin: 5px 0;
                width: 100%;
            }
            .form-step input[type='text']{
                border: 1px solid #CFCFCF;
                border-radius: 4px 4px 4px 4px;
                height: 25px;
                padding: 3px;
                width: 200px;
            }
            select{
                border-radius: 4px;
                border: 1px solid #CFCFCF;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                background: #FFF;
                padding: 2px;
                height: 30px;
                width:205px;
                font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
                font-size:12px;
                background:#f4f4f4;
            }

            select option{
                font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
                font-size:12px;
                background:#f4f4f4;
                color:#717171;
            }


            .form-error{
                color: red;
                font-size: 12px;
                padding: 8px;
            }

            .step-error{
                background:#f5715f !important;
                color:#FFF !important;
                -moz-box-shadow:1px 1px 4px #C6C4C4
                    -webkit-box-shadow:1px 1px 4px #C6C4C4
                    box-shadow:1px 1px 4px #C6C4C4
            }
            .step-success{
                background:#72e487 !important;
                color:#FFF !important;
                -moz-box-shadow:1px 1px 1px 4px #C6C4C4
                    -webkit-box-shadow:1px 1px 1px 4px #C6C4C4
                    box-shadow:1px 1px 1px 4px #C6C4C4
            }
            .bullet-desc{
                font-size: 14px;
                font-weight: bold;
            }
        </style>
</head>
<body>
    <div id="page">
        <div id="wrapper">
            <h3>Account Registration</h3>
            <form action="" >

                <div id="slider">
                    <div class="form-step" >

                        <div class="row">
                            <div class="form-left">¿Con quien vives? *</div>
                            <div class="form-right">
                                <input type="radio" name="Pregunta1" value="opción1" id="RadioGroup1_0" onClick="opcion1.disabled = true">
                                Padre</label>
                                <label>
                                    <input type="radio" name="Pregunta1" value="opción2" id="RadioGroup1_1" onclick="opcion1.disabled = true">
                                    Madre </label>
                                <label>
                                    <input type="radio" name="Pregunta1" value="opción3" id="RadioGroup1_2" onclick="opcion1.disabled = true">
                                    Ambos</label>
                                <input type="radio" name="Pregunta1" value="opción4" id="RadioGroup1_2" onclick="opcion1.disabled = false">
                                especifica <input name="opcion1" type="text" disabled="disabled"> </div>
                            <div class="form-error"></div>
                        </div>


                        <div class="row">
                            <div class="form-left">2.-¿Cual es el estado civil de tus padres? *</div>
                            <div class="form-right"> <label>
                                    <input type="radio" name="RadioGroup1" value="opción1" id="RadioGroup1_0" onClick="opcion.disabled = true">
                                    Casados</label>
                                <label>
                                    <input type="radio" name="RadioGroup1" value="opción2" id="RadioGroup1_1" onclick="opcion.disabled = true">
                                    divorciados </label>
                                <label>
                                    <input type="radio" name="RadioGroup1" value="opción3" id="RadioGroup1_2" onclick="opcion.disabled = true">
                                    Union libre</label>
                                <input type="radio" name="RadioGroup1" value="opción4" id="RadioGroup1_2" onclick="opcion.disabled = false">
                                otro(especifica) <input name="opcion" type="text" disabled="disabled"> </div>
                            <div class="form-error"></div>
                        </div>
                        
                        <div class="row">
                            <div class="form-left"> 3.-¿Que escolaridad tiene tu.. <br> 
                                3.1.-padre?<br></div>
                            <div class="form-right">
                                <label>
            <input type="radio" name="Pregunta3" value="opción1" id="RadioGroup1_0" onClick="opcion3.disabled = true">
            Primaria</label>
        <label>
            <input type="radio" name="Pregunta3" value="opción2" id="RadioGroup1_1" onclick="opcion3.disabled = true">
            Secundaria </label>
        <label>
            <input type="radio" name="Pregunta3" value="opción3" id="RadioGroup1_2" onclick="opcion3.disabled = true">
            Bachillerato</label>
        <input type="radio" name="Pregunta3" value="opción4" id="RadioGroup1_2" onclick="opcion3.disabled = true">
        Profesional 
        <input type="radio" name="Pregunta3" value="opción5" id="RadioGroup1_2" onclick="opcion3.disabled = false">
        Otro 
        <input name="opcion3" type="text" disabled="disabled"> </label> 
                            </div>
                            <div class="form-error"></div>
                        </div>
                        
                        <div class="row">
                            <div class="form-left">3.2.-madre?</div>
                            <div class="form-right"><label>
            <input type="radio" name="pregunta3y2" value="opción1" id="RadioGroup1_0" onClick="opcion3y2.disabled = true">
            Primaria</label>
        <label>
            <input type="radio" name="pregunta3y2" value="opción2" id="RadioGroup1_1" onclick="opcion3y2.disabled = true">
            Secundaria </label>
        <label>
            <input type="radio" name="pregunta3y2" value="opción3" id="RadioGroup1_2" onclick="opcion3y2.disabled = true">
            Bachillerato</label>
        <input type="radio" name="pregunta3y2" value="opción4" id="RadioGroup1_2" onclick="opcion3y2.disabled = true">
        Profesional 
        <input type="radio" name="pregunta3y2" value="opción5" id="RadioGroup1_2" onclick="opcion3y2.disabled = false">
        Otro 
        <input name="opcion3y2" type="text" disabled="disabled"> </label> <br></div>
                            <div class="form-error"></div>
                        </div>

                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left">4.-¿Cuanto es el ingreso econocmico familiar mensual aproximado de tu familia? *</div>
                            <div class="form-right"> $<input type="text" name="pregunta4"> </div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">5.-Cuantos hermanos son en tu familia incluyéndote?<br>*</div>
                            <div class="form-right"><input type="text" name="pregunta5"></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">6.-¿con quien platicas cuando tienes un problema personal?<br></div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta6" value="opción1" id="RadioGroup1_0" onClick="opcion6.disabled = true">
            Padre</label>
        <label>
            <input type="radio" name="Pregunta6" value="opción2" id="RadioGroup1_1" onclick="opcion6.disabled = true">
            Madre </label>
        <label>
            <input type="radio" name="Pregunta6" value="opción3" id="RadioGroup1_2" onclick="opcion6.disabled = true">
            Ambos</label>
        <input type="radio" name="Pregunta6" value="opción4" id="RadioGroup1_2" onclick="opcion6.disabled = true">
        Hermanos 
        <input type="radio" name="Pregunta6" value="opción5" id="RadioGroup1_2" onclick="opcion6.disabled = false">
        Otro(Especifica) 
        <input name="opcion6" type="text" disabled="disabled"> </label></div>
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="row">
                            <div class="form-left"> 6.-¿Cómo te llevas con tu…<br> 
                                6.1 Padre ?</div>
                            <div class="form-right"> <label>
            <input type="radio" name="Pregunta6y1" value="opción1" id="RadioGroup1_0" onClick="opcion6y1.disabled = true">
            Bien</label>
        <label>
            <input type="radio" name="Pregunta6y1" value="opción2" id="RadioGroup1_1" onclick="opcion6y1.disabled = true">
            Regular </label>
        <label>
            <input type="radio" name="Pregunta6y1" value="opción3" id="RadioGroup1_2" onclick="opcion6y1.disabled = true">
            Mal</label>
        <input type="radio" name="Pregunta6y1" value="opción4" id="RadioGroup1_2" onclick="opcion6y1.disabled = true">
        No convivo</div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left"> 6.2Madre?</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta6.2" value="opción1" id="RadioGroup1_0" onClick="opcion6y2.disabled = true">
            Bien</label>
        <label>
            <input type="radio" name="Pregunta6.2" value="opción2" id="RadioGroup1_1" onclick="opcion6y2.disabled = true">
            Regular </label>
        <label>
            <input type="radio" name="Pregunta6.2" value="opción3" id="RadioGroup1_2" onclick="opcion6y2.disabled = true">
            Mal</label>
        <input type="radio" name="Pregunta6.2" value="opción4" id="RadioGroup1_2" onclick="opcion6y2.disabled = true">
        No convivo</div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left"> 6.3Hermanos?</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta6.2" value="opción1" id="RadioGroup1_0" onClick="opcion6y2.disabled = true">
            Bien</label>
        <label>
            <input type="radio" name="Pregunta6.2" value="opción2" id="RadioGroup1_1" onclick="opcion6y2.disabled = true">
            Regular </label>
        <label>
            <input type="radio" name="Pregunta6.2" value="opción3" id="RadioGroup1_2" onclick="opcion6y2.disabled = true">
            Mal</label>
        <input type="radio" name="Pregunta6.2" value="opción4" id="RadioGroup1_2" onclick="opcion6y2.disabled = true">
        No convivo</div>
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left">7.-¿Quién sostiene económicamente tus estudios? *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta7" value="opción1" id="RadioGroup1_0" onClick="opcion7.disabled = true">
            Padre</label>
        <label>
            <input type="radio" name="Pregunta7" value="opción2" id="RadioGroup1_1" onclick="opcion7.disabled = true">
            Madre </label>
        <label>
            <input type="radio" name="Pregunta7" value="opción3" id="RadioGroup1_2" onclick="opcion7.disabled = true">
            Ambos</label>
        <input type="radio" name="Pregunta7" value="opción4" id="RadioGroup1_2" onclick="opcion7.disabled = true">
        Hermanos
        <input type="radio" name="Pregunta7" value="opción5" id="RadioGroup1_2" onclick="opcion7.disabled = false">
        Otro (Especifica)  
        <input name="opcion7" type="text" disabled="disabled"> </label> <br></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">8.- Menciona las escuelas donde has estudiado el bachillerato, indicando los grados estudiados en caso de haber estudiado en mas de una escuela.*</div>
                            <div class="form-right"><table width="440" border="1" cellspacing="dsadasdasdsa" cellpadding="dsadasddd">
            <tr>
                <th width="144" scope="col">Nombre de la escuela</th>
                <th width="144" scope="col">estado donde se encuentra</th>
                <th width="144" scope="col">el grado en que se cruzo</th>
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
        </table></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">9.-Que materias te gustan mas?*</div>
                            <div class="form-right"><input type="text" name="alguno"></div>
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left">10.-Realizas otros estudios fuera de tecnológico?especifica *</div>
                            <div class="form-right"><label>
            <input type="radio" name="pregunta10" value="opción1" id="RadioGroup1_0" onClick="opcion10.disabled = true">
            Si</label>
        <label>
            <input type="radio" name="pregunta10" value="opción2" id="RadioGroup1_1" onclick="opcion10.disabled = false">
            No </label>
        <label>
            cuales:<input name="opcion10" type="text" disabled="disabled"> </label></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">11.-Marca dos actividades que realices como pasatiempo *</div>
                            <div class="form-right"> <label>
            <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_0">
            Cine </label>

        <label>
            <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_1">
            Conciertos </label>

        <label>
            <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_2">
            Actividades Culturales
        </label>

        <label>
            <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_3">
            bibliotecas </label>

        <label>
            <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_4">
            bailar </label>

        <label>
            <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_5">
            fiestas </label>

        <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_5">
        VideoJuegos </label>

        <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_5">
        Compras </label>
        <input type="checkbox" name="CheckboxGroup1" value="casilla de verificación " id="CheckboxGroup1_5">
        Deportes </div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">12.-Trabajas actualmente? *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta12" value="opción1" id="RadioGroup1_0" onClick="opcion12.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta12" value="opción2" id="RadioGroup1_1" onClick="opcion12.disabled = true">
            No </label></div>
                            <div class="form-error"></div>
                        <br>
                            <div class="form-left">12.1.- En que trabajas? *</div>
                            <div class="form-right"> <input name="opcion12" type="text" disabled="disabled"> </div>
                            <div class="form-error"></div>
                        <br>
                            <div class="form-left">12.2.- ¿cual es el motivo por el cual laboras? *</div>
                            <div class="form-right"> <input name="opcion12y2" type="text" disabled="disabled"> </div>
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left">13.-Cuales son las razones por la que ingrsaste al tecnológico? *</div>
                            <div class="form-right"> <label>
            <br><input type="radio" name="Pregunta13" value="opción1" id="RadioGroup1_0" onClick="opcion13.disabled = true">
            Porque esta es la escuela que desean mis padres.</label><br>
        <label>
            <input type="radio" name="Pregunta13" value="opción2" id="RadioGroup1_1" onclick="opcion13.disabled = true">
            porque no es cara la colegiatura. </label><br>
        <label>
            <input type="radio" name="Pregunta13" value="opción3" id="RadioGroup1_2" onclick="opcion13.disabled = true">
            Porque la institucion tiene prestigio</label><br>
        <input type="radio" name="Pregunta13" value="opción4" id="RadioGroup1_2" onclick="opcion13.disabled = true">
        porque tiene buenos egresados. <br>
        <input type="radio" name="Pregunta13" value="opción4" id="RadioGroup1_2" onclick="opcion13.disabled = true">
        Porque no alcanze cupo en otra escuela. <br>
        <input type="radio" name="Pregunta13" value="opción5" id="RadioGroup1_2" onclick="opcion13.disabled = false">
        Otro(Especifica) 
        <input name="opcion13" type="text" disabled="disabled"> </label> </div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">14.- Cuales son las razones por la que ingresaste a la carrera? *</div>
                            <div class="form-right"><input type="radio" name="RadioGroup1" value="opción2" id="RadioGroup1_1" onclick="opcion.disabled = true">
        porque espero ganar mucho dinero con ella. </label><br>
        <label>
            <input type="radio" name="Pregunta14" value="opción3" id="RadioGroup1_2" onclick="opcion14.disabled = true">
            Porque les la carrera que he elegido y me apasiona</label><br>
        <input type="radio" name="Pregunta14" value="opción4" id="RadioGroup1_2" onclick="opcion14.disabled = true">
        por su plan de estudios. <br>
        <input type="radio" name="Pregunta14" value="opción4" id="RadioGroup1_2" onclick="opcion14.disabled = true">
        Porque no hubo cupo en la carrera que me interesa. <br>
        <input type="radio" name="Pregunta14" value="opción4" id="RadioGroup1_2" onclick="opcion14.disabled = true">
        Porque es la carrera que desena mis padres. <br>
        <label>
            <input type="radio" name="Pregunta14" value="opción1" id="RadioGroup1_0" onClick="opcion14.disabled = true">
            Porque es la unica escuela que da esta carrera.</label><br>
        <label>
            <input type="radio" name="Pregunta14" value="opción5" id="RadioGroup1_2" onclick="opcion14.disabled = false">
            Otro(Especifica) 
            <input name="opcion14" type="text" disabled="disabled"> </label> </div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">15.- ¿Padece alguna alergia? *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta15" value="opción1" id="RadioGroup1_0" onClick="opcion15.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta15" value="opción2" id="RadioGroup1_1" onclick="opcion15.disabled = true">
            No </label>
        <br>
        ¿cual?  <input name="opcion15" type="text" disabled="disabled"></div>
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left"> 16.- Padece alguna enfermedad crónica? *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta16" value="opción1" id="RadioGroup1_0" onClick="opcion16.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta16" value="opción2" id="RadioGroup1_1" onclick="opcion16.disabled = true">
            No </label>
        <br>
        ¿Cuál?  <input name="opcion16" type="text" disabled="disabled"></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">17.- Has recibido atención psicológica? *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta17" value="opción1" id="RadioGroup1_0" onClick="opcion17.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta17" value="opción2" id="RadioGroup1_1" onclick="opcion17.disabled = true">
            No </label>
        <br>
        Especifica que tipo <input name="opcion17" type="text" disabled="disabled"></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">18.-Donde recibes atención medica? *</div>
                            <div class="form-right"> <label>
            <input type="radio" name="Pregunta18" value="opción1" id="RadioGroup1_0" onClick="opcion18.disabled = true">
            Imss</label>
        <label>
            <input type="radio" name="Pregunta18" value="opción2" id="RadioGroup1_1" onclick="opcion18.disabled = true">
            issste </label>
        <label>
            <input type="radio" name="Pregunta18" value="opción3" id="RadioGroup1_2" onclick="opcion18.disabled = true">
            h. militar</label>
        <input type="radio" name="Pregunta18" value="opción4" id="RadioGroup1_2" onclick="opcion18.disabled = true">
        particular </div>
                            <div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left"> 19-. ¿fumas? *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta19" value="opción1" id="RadioGroup1_0" onClick="opcion19.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta19" value="opción2" id="RadioGroup1_1" onclick="opcion19.disabled = true">
            No </label></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">20.-Consumes bebidas embriagantes? *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta20" value=opción1" id="RadioGroup1_0" onClick="opcion20.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta20" value="opción2" id="RadioGroup1_1" onclick="opcion20.disabled = true">
            No </label></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">21.-Has tenido problemas legales? *</div>
                            <div class="form-right"> <label>
            <input type="radio" name="Pregunta21" value="opción1" id="RadioGroup1_0" onClick="opcion21.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta21" value="opción2" id="RadioGroup1_1" onclick="opcion21.disabled = true">
            No </label>
        <br>
        especifica el motivo <input name="opcion21" type="text" disabled="disabled"></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left"> 22.- Practicas algun deporte *</div>
                            <div class="form-right"><label>
            <input type="radio" name="Pregunta22" value="opción1" id="RadioGroup1_0" onClick="opcion22.disabled = false">
            Si</label>
        <label>
            <input type="radio" name="Pregunta22" value="opción2" id="RadioGroup1_1" onclick="opcion22.disabled = true">
            No </label><br>
        Cual? <input name="opcion22" type="text" disabled="disabled"></div>
                            <div class="form-error"></div>
                        </div>
                       
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
