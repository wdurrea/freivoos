<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo'
        <script>
            alert("Por favor inicia sesión");
            window.location = "../index.php";
        </script>
    ';
    //header("location: ../index.php");
    session_destroy();
    die();
}

include("conexion.php");

$con=conectar();

echo "La conexión a la BD se realizo correctamente";
?>