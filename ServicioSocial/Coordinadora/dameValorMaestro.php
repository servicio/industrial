<?php

include '../Dao/daoServicio.php';
$maestro = new maestros();
$dao = new daoServicio();
$idMaestro = $_GET["dato"];
$maestro = $dao->dameInfoMaestro($idMaestro);

echo"
        <script>
        $(document).ready(function() {
        $('actualizar').click(function(){
        alert('me hizo click');
        });
        });
        </script>
        
        <div  id='myModal'>
        <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button>
            <h3 id='myModalLabel'>Altas Maestros</h3>
        </div>
        <div class='modal-body'>
            <center>
                <input id='NombreMaestro' type='text' id='Nombre Maestro' value='" . $maestro->getMaestro() . "' placeholder='Nombre...' style='height: 40px ;'/>
            </center>
            <div class='modal-footer'>
                <button class='btn btn-warning' data-dismiss='modal' aria-hidden='true'>Cancelar <i class='icon-ban-circle icon-white'></i></button>
                <input type='submit' id='actualizar' class='btn btn-primary'aria-hidden='true'><i class='icon-refresh icon-white'></i></input>
            </div>
        </div>
     </div>";
?>
