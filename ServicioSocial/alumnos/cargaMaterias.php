<link rel="stylesheet" type="text/css" href="../css/css.css">
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap-responsive.css"/>

        <script src="../bootsTrap2/js/jquery.min.js"></script>
        <script src="../bootsTrap2/js/bootstrap.js"></script>
<?php
// session_start();
//session_destroy();
//if(isset($_SESSION['usuario']) and $_SESSION['estado'] == 'Autenticado') 
//{ 
//    echo 'Usuario: '.$_SESSION['usuario'];
    include './plantilla.php'; 
//    include '../DaoConnection/coneccion.php';
    include '../clases/materias.php';
    include '../Dao/daoServicio.php';
$dao = new daoServicio();
 $algo="e09080264";
 $materias = new materias();
 
 
 
 
 
 echo "<form name=\"materias\" action=\"cambioMaterias.php\">"; 
 $arreglo2D = $dao->consultaMaterias($algo, $materias);
  
 echo '<table border="1" class="table table-bordered table-striped">';
echo '<tr>';
$renglon = $arreglo2D[0];
echo "<th> </th>";

foreach($renglon as $campo=>$valor){
echo "<th> $campo </th>";
                                   }
echo '<tr>';

foreach($arreglo2D as $renglon)         {
echo "<tr>";

foreach($renglon as $campo=>$valor){
echo "<td> $valor </td>";
echo $valor;                        }
echo "<td><input type=\"checkbox\" name=\"alguno[]\" value=\"$campo->\"id\" \" </td>";
echo "</tr>";
                                         }
echo "</table>";
echo "<input type=\"submit\" class=\"btn btn-primary\"  name=\"guardar\" value=\"Guardar\">"; 
echo "</form>"; 
            // Lo dejas entrar a la pagina 
////} 
//else 
//{   
//       // Usuario que no se ha logueado 
//       echo "No tienes permiso para entrar a esta pagina"; 
//       exit(); 
//    
//}  

?>



