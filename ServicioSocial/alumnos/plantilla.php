<link rel="stylesheet" type="text/css" href="../css/css.css">
<link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../bootsTrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="estilos.css"/>

<script src="../bootsTrap/js/jquery.min.js"></script>
<script src="../bootsTrap/js/bootstrap.js"></script>

<style>
    body{ 
        background: url(galeria/BackgrundV7.png)  center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Portal de Alumnos Ing. Industrial</title>
</head>
<header>
    <div class="container"  style="height: 200px; border-radius: 5px; background-image: url(galeria/HeaderBETA.png); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
        <div style="text-align: center">
            <h1>Instituto Tecnol&oacutegico de M&eacuterida</h1>
            <h3>Portal</h3>
            <h3>Industrial</h3>
        </div>
    </div>
    <div class="container"> 
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">

                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <!-- Be sure to leave the brand out there if you want it shown -->
                <ul class="nav">
                    <li><div class="btn-group">
                            <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> Usuario</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-pencil"></i> Editar</a></li>
                                <li><a href="#"><i class="icon-trash"></i>Borrar</a></li>
                                <li><a href="#"><i class="icon-ban-circle"></i>Banear</a></li>
                                <li class="divider"></li>
                                <li><a href="cerrarSesion.php"><i class="i"></i>Salir</a></li>
                            </ul>
                        </div></li>
                    <li class="divider-vertical"></li>
                    <li class="active"><a>Portal Alumnos</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="#myModal" data-toggle="modal">Regitro de Usuario</a> </li>
                </ul>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href="">Calificaciones</a> </li>
                        <li class="divider-vertical"></li>
                        <li><a href="">Creditos Extra</a> </li>
                        <li class="divider-vertical"></li>
                        <li><a href="">Creacion de grupos</a> </li>
                        <li class="divider-vertical"></li>
                        <li><a href="">Tutorias</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include './datosPersonales.php'; ?>
</header>
<body>
</body>

