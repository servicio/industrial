<?php
class coneccion {

    function conectarse() {
        if (!($link = mysql_connect("localhost", "root", ""))) {
//    if (!($link = mysql_connect("mysql.pcoriente.com.mx", "pablo_torres", "Pato82"))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("prototipo", $link)) {
            echo "Error seleccionando la base de datos.";
            exit();
        }
        return $link;
    }
    function cerrarseBD(){
        
        mysql_close();
    }
}

?>
