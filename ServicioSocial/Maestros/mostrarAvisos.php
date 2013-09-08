<?php
include '../DaoConnection/coneccion.php';

$cn = new coneccion();
$sql = "SELECT * FROM avisostutor ORDER BY id DESC LIMIT 20";
$datos = mysql_query($sql, $cn->Conectarse());
$cn->cerrarBd();
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <script src="../bootsTrap2/js/jquery.min.js"></script>
        <script src=../"bootsTrap/js/bootstrap.js"></script>
    </head>
    <body>
        
        <div class="container">
            <?php include './plantillaEncabezado.php'; ?>
            <center>
                <div   class="span12"  style="margin: auto; background-color: white; margin-top: -20px">
                    <?php
                    echo '<table border=1">';
                    while ($row = mysql_fetch_array($datos)) {

                        echo "<div style='text-align: left; margin-left: 150px;'><h3>" . $row["titulo"] . "</h3></div><br>";

                        echo "<div style=''>" . $row["detalles"] . "</div><br>";

                        echo '<hr size="3" noshade size="5" width="75%;"';
                    }
                    ?>

                </div>
            </center>
            <?php include './plantillaFooter.php'; ?>
        </div>
    </body>
</html>
