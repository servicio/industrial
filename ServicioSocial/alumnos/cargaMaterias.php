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
    //include './plantilla.php'; 
//    include '../DaoConnection/coneccion.php';
    include '../clases/materias.php';
    include '../Dao/daoServicio.php';
$dao = new daoServicio();
 $algo="prr";
 $materias = new materias();
 
 
 
$arreglo2D = $dao->consultaMateriasObligatorias($algo); 

$dao->tablatemporalcargadas($arreglo2D); 
 
 
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



