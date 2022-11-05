<?php

function conectar(){
    $user="admin";
    $passwd="Saturno2309#";
    $server="freivoosdb.cdrmiw6khp29.us-east-1.rds.amazonaws.com";
    $port="3306";
    $db="freivoosdb";
    //$con= mysqli_connect($server,$user,$passwd) or die("Error de conexión a la Base de Datos".mysqli_error($con));
    $con= new mysqli($server,$user,$passwd,$db,$port) or die("Error de conexión a la Base de Datos".mysqli_error($con));
    //mysqli_query($db,$con);
    mysqli_query($con, "select * from t_users" );


    return $con;
}

?>