<?php
include 'DaoConnection/conexion.php';
class daoServicio {
    
    function verificacion_de_ingreso(usuario $u) {
       $cn = new coneccion();
        $paso = false;
        $sql = "SELECT * FROM usuario WHERE usuario='" . $u->getUsuario() . "' AND Password='" . $u->getPassword() . "'";
       $datos =  mysql_query($sql, $cn->Conectarse());
        $columnas = mysql_affected_rows();
        if ($columnas > 0) {
            $paso = true;
        } else {
            $paso = false;
        }
        return $paso;
    }
}

?>
