<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of coneccion
 *
 * @author Comodoro
 */
class coneccion {

    function conectarse() {
        if (!($link = mysql_connect("localhost", "root", ""))) {
//    if (!($link = mysql_connect("mysql.pcoriente.com.mx", "pablo_torres", "Pato82"))) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        if (!mysql_select_db("10d2", $link)) {
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
