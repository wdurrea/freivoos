<?php

function conectar(){
    $user="root";
    $passwd="Saturno2309";
    $server="localhost";
    $db="freivoosdb";
    $con= mysqli_connect($server,$user,$passwd); //or die("Error de conexión a la Base de Datos".mysqli_error());
    //mysqli_query($db,$con);
    //mysqli_query("select * from T_user" );


    return $con;
}

?>