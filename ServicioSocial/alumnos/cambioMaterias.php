
<?php
//include './plantilla.php'; 
include '../clases/materias.php';
include '../Dao/daoServicio.php';
$matricula = "prr";
$dao = new daoServicio();


?>
<script>
 
  
 
</script>
<div style="background: #0072c6">

    <?php
    $arreglo2D = $dao->consultatablaObligadas($matricula);
    echo "<form name=\"materias\" method=\"post\" action=\"cambioMaterias.php\">";


    echo '<table border="1" class="table table-bordered table-striped">';
    echo '<tr>';
    $renglon = $arreglo2D[0];


    foreach ($renglon as $campo => $valor) {
        echo "<th> $campo </th>";
    }
    echo '<tr>';

    foreach ($arreglo2D as $renglon) {
        echo "<tr>";

        foreach ($renglon as $campo => $valor) {
            echo "<td> $valor </td>";
            if ($campo == "materias") {
                $prr = $valor;
            }
            
        }
        echo "<td><input  type=\"checkbox\" name=\"alguno[]\" id=\"aceptado\" value=\"$prr;\" </td>";
        echo "</tr>";
    }
    echo "</table>";
         echo "<input type=\"submit\" class=\"btn btn-primary\"  name=\"guardar\" value=\"Guardar\">";

    echo "</form>";
   
   
?>


</div>
<div style="background: #72e487">

    <?php
    $arreglo2D = $dao->consultatablaseleccionar($matricula);
   echo "<form name=\"materias\" method=\"post\" action=\"cambioMaterias.php\">";


    echo '<table border="1" class="table table-bordered table-striped">';
    echo '<tr>';
    $renglon = $arreglo2D[0];


    foreach ($renglon as $campo => $valor) {
        echo "<th> $campo </th>";
    }
    echo '<tr>';

    foreach ($arreglo2D as $renglon) {
        echo "<tr>";

        foreach ($renglon as $campo => $valor) {
            echo "<td> $valor </td>";
            if ($campo == "materias") {
                $prr = $valor;
            }
            
        }
        echo "<td><input id=\"aceptar\" type=\"checkbox\" name=\"alguno[]\" value=\"$prr;\" </td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "</form>";
?>


</div>


<?php ?>