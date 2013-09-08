<?php
include '../DaoConnection/coneccion.php';

$cn = new coneccion();
$sql = "SELECT * FROM avisostutor ORDER BY id DESC LIMIT 20";
mysql_query($sql, $cn->Conectarse());
$cn->cerrarBD;
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
                    <h1>AVISOS</h1>
                    
                    <?php
                    $result = mysql_query($sql);
                    $numero = 0;
                    echo '<table border=1, width="300px;">';
                    while ($row = mysql_fetch_array($result)) {

                        echo "<tr><td><font face=\"verdana\">" .
                        $row["titulo"] . "</font></td></tr>";

                        echo "<tr><td><font face=\"verdana\">" .
                        $row["detalles"] . "</font></td>";

                        $numero++;
                    }
                    echo "</td></tr></table>";
                    ?>

                </div>
            </center>
            <?php include './plantillaFooter.php'; ?>
        </div>
    </body>
</html>
