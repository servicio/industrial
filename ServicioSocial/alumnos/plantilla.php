<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap-responsive.css"/>

<script src="../bootsTrap/js/jquery.min.js"></script>
<script src="../bootsTrap/js/bootstrap.js"></script>

<style>
    body { 
        background: url(galeria/Nebula.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

<body>
    <div class="container">  
        <div class="span12" style="margin: auto">
            <img style="width: 5%" src="../imagenes/tec.jpg">
            <div class="bs-docs-example" style="background-color: #0088cc">
                <ul class="nav nav-pills">
                    <li class="active" style="color: white"><a>Portal Alumnos</a></li>
                    <li><a href="#myModal" style="color: white"  data-toggle="modal">Regitro de Usuario</a> </li>
                    <li><a href=""style="color: white">Calificaciones</a> </li>
                    <li><a href=""style="color: white">creditosExtra</a> </li>
                    <li><a href=""style="color: white">Creacion de grupos</a> </li>
                    <li><a href=""style="color: white">Tutorias</a> </li>
                </ul> <!-- /tabs -->
            </div>
            <div class="row">
                <div id="medio"class="span12" style="background-color: #e9562b">
                </div>
                <br>
                <div class="span12" style="background-color: #e9562b">
                    <br>
                </div>
            </div>
        </div>
    </div>
    <?php include './datosPersonales.php'; ?>
</body>
