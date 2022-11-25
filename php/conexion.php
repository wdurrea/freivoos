<?php

require_once('/config/config.php');

function conectar(){;
    //$con= mysqli_connect($server,$user,$passwd) or die("Error de conexión a la Base de Datos".mysqli_error($con));
    $con= new mysqli($servidor,$usuario,$pass,$bbdd,$port) or die("Error de conexión a la Base de Datos".mysqli_error($con));
    //mysqli_query($db,$con);
    mysqli_query($con, "select * from t_users" );


    return $con;
}

?>