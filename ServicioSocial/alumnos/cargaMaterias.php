<?php
 session_start();
session_destroy();
if(isset($_SESSION['usuario']) and $_SESSION['estado'] == 'Autenticado') 
{ 
    echo 'Usuario: '.$_SESSION['usuario'];
    include './plantilla.php'; 
    include '../clases/materias.php';
include '../Dao/daoServicio.php';
 
echo consultaMaterias($_SESSION['usuario']);
    
 
            // Lo dejas entrar a la pagina 
} 
else 
{   
       // Usuario que no se ha logueado 
       echo "No tienes permiso para entrar a esta pagina"; 
       exit(); 
    
}  

?>



