
<link rel="stylesheet" type="text/css" href="../css/css.css">
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="../bootsTrap2/css/bootstrap-responsive.css"/>
         
        <script src="../bootsTrap2/js/jquery.min.js"></script>
        <script src="../bootsTrap2/js/bootstrap.js"></script>
<?php
include './plantilla.php';
// session_start();
//session_destroy();
//if(isset($_SESSION['usuario']) and $_SESSION['estado'] == 'Autenticado') 
//{ 
//    echo 'Usuario: '.$_SESSION['usuario'];
    //include './plantilla.php'; 
//    include '../DaoConnection/coneccion.php';
    include '../clases/materias.php';
    include '../Dao/dao.php';
    header('Content-Type: text/html; charset=UTF-8'); 
$dao = new dao();
 $algo="prr";
 $materias = new materias();
 
 
 
$arreglo2D = $dao->consultaMateriasObligatorias($algo); 

$dao->tablatemporalcargadas($arreglo2D,$algo); 

$arreglox = $dao->consultaMateriasSeleccionadas($algo);

$dao->tablatemporalSeleccionar($arreglox,$algo); 
 
 ?><script>
             location.href='cambioMaterias.php';
        </script><?php
            // Lo dejas entrar a la pagina 
            include './plantillaFooter.php';
////} 
//else 
//{   
//       // Usuario que no se ha logueado 
//       echo "No tienes permiso para entrar a esta pagina"; 
//       exit(); 
//    
//}  

?>



