<?php
 include './plantilla.php'; 
 include '../clases/materias.php';
 include '../Dao/daoServicio.php';
$materias= "e09080264";
$dao = new daoServicio();
 $datos=$_POST['alguno'] ;
  
$arreglo2D = $dao->consultaMateriascambio($materias ,$datos); 
 
echo "<form name=\"materias\" method=\"post\" action=\"cambioMaterias.php\">"; 
 
  
 echo '<table border="1" class="table table-bordered table-striped">';
echo '<tr>';
$renglon = $arreglo2D[0];


foreach($renglon as $campo=>$valor){
echo "<th> $campo </th>";
                                   }
echo '<tr>';

foreach($arreglo2D as $renglon)         {
echo "<tr>";

foreach($renglon as $campo=>$valor){
echo "<td> $valor </td>";
if($campo=="Materia"){
				 $prr=$valor;
				 }   
                                 echo $prr;}
echo "<td><input type=\"checkbox\" name=\"alguno[]\" value=\"$prr;\" </td>";
echo "</tr>";
                                         }
echo "</table>";
echo "<input type=\"submit\" class=\"btn btn-primary\"  name=\"guardar\" value=\"Guardar\">"; 
echo "</form>"; 
?>
