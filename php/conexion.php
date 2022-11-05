<?php

function conectar(){
    $user="root";
    $passwd="Saturno2309";
    $server="localhost";
    $port="3307";
    $db="freivoosdb";
    //$con= mysqli_connect($server,$user,$passwd) or die("Error de conexión a la Base de Datos".mysqli_error($con));
    $con= new mysqli($server,$user,$passwd,$db,$port) or die("Error de conexión a la Base de Datos".mysqli_error($con));
    //mysqli_query($db,$con);
    mysqli_query($con, "select * from T_users" );


    return $con;
}

?>