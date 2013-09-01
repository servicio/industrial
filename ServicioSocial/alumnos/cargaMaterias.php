<?php
// session_start();
//session_destroy();
//if(isset($_SESSION['usuario']) and $_SESSION['estado'] == 'Autenticado') 
//{ 
//    echo 'Usuario: '.$_SESSION['usuario'];
    include './plantilla.php'; 
    include '../DaoConnection/coneccion.php';
    include '../clases/materias.php';
include '../Dao/daoServicio.php';
$dao = new daoServicio();
 $algo="e09080264";

 

 $materias = new materias();
 $materias = $dao->consultaMaterias($algo);
    
 foreach ($materias as $valor){
     echo $valor;
     
 }
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



