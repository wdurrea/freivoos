<?php

#Inicializa la sesion del usuario
session_start();
#Llamar archivo de conexión de base de datos.
include "conexion.php";

# Funcion de login
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$con=conectar();
// $usuario="wdurrea";
// $contrasena="Pluton02";

//mysqli_query($con, "select * from T_users" );

$validar_login = mysqli_query($con, "SELECT * FROM t_users WHERE usuario='$usuario' AND Passwd='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION["usuario"] = $usuario;
    header("location: prueba.php");
    exit;
}else{
    echo '
        <script>
            alert("Usuario NO existe, verifique los datos que ingresa sean los correctos");
            window.location = "../index.php";
        </script>
    ';
    exit;
}


?>