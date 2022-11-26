<?php

function conectar(){

    require_once('config/config.php');
    //Recuerde ingresar contraseña en el archivo /config/config.php
    $con= new mysqli($servidor,$usuario,$pass,$bbdd,$port) or die("Error de conexión a la Base de Datos".mysqli_error($con));
    //mysqli_query($db,$con);
    mysqli_query($con, "select * from t_users" );

    return $con;
}

?>