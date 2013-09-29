<link rel="stylesheet" type="text/css" href="jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript" src="webcam.js"></script>
<script language="JavaScript">
    webcam.set_api_url('test.php');//PHP adonde va a recibir la imagen y la va a guardar en el servidor
    webcam.set_quality(90); // calidad de la imagen
    webcam.set_shutter_sound(true); // Sonido de flash
</script>
<script language="JavaScript">
    webcam.set_hook('onComplete', 'my_completion_handler');

    function do_upload() {
        // subir al servidor
        document.getElementById('upload_results').innerHTML = '<h6>Imagen guardada</h6>';
        webcam.upload();
    }

    function my_completion_handler(msg) {

        if (msg.match(/(http\:\/\/\S+)/)) {
            var image_url = RegExp.$1;//respuesta de text.php que contiene la direccion url de la imagen
            // Muestra la imagen en la pantalla
            document.getElementById('upload_results').innerHTML =
                    '<img src="' + image_url + '">';
//                    '<form action="gestion_foto.php" method="post">' +
//                    '<input type="hidden" name="id_foto" id="id_foto" value="' + image_url + '"  /><br>' +
//                    '<label>Nombre </label><input type="text" name="nombre_foto" id="nombre_foto"/>' +
//                    '<label>Descripcion </label><input type="text" name="des" id="des"/>' +
//                    '<input type="submit" name="button" id="button" value="Enviar" /></form>'
//                    ;
            // reset camera for another shot
            webcam.reset();

        }
        else
            alert("PHP Error: " + msg);
    }
</script>
<div align="center" id="cuadro_camara">    
    <div id="visualizacionCamara" style="padding-top: 5%">
        <script language="JavaScript">
            document.write(webcam.get_html(250, 250));//dimensiones de la camara
        </script>
    </div>
    <form>
        <br>
        <input type=button value="Tomar foto" onClick="webcam.freeze()" class="btn btn-info">
        &nbsp;&nbsp;
        <input type=button value="Guardar " onClick="do_upload()"  name="dato" class="btn btn-success"/>
        &nbsp;&nbsp;
        <input type=button value="Cancelar" onClick="webcam.reset()" class="btn btn-warning">
    </form>
    <div style="float: right" id="upload_results" class="formulario"></div>
</div>