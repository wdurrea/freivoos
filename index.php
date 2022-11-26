<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: php/prueba.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login y Register - Freivoos </title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300&display=swap" rel="stylesheet">

</head>

<body class="bg-dark">
    <section>
        <div class="row g-0">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-5">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
                    <img src="assets/images/bg6.png" class="img-fliud rounded-top">
                </div>
                <div class="px-lg-2 py-lg-3 p-4">
                    <h1 class="font-weight-bold mb-4">Bienvenido</h1>

                    <form action="php/login.php" method="POST" class="formulario__login">

                        <div class="mb-4" action="php/login.php" method="POST" class="formulario__login">
                            <label for="usuario" class="form-label font-weight-bold">Usuario</label>
                            <input type="text" class="form-control" placeholder="Ingresa tu usuario" name="usuario" required id="usuario" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <label for="contrasena" class="form-label font-weight-bold">Contraseña</label>
                            <input type="password" class="form-control mb-2" placeholder="Ingresa tu contraseña" name="contrasena" required id="contrasena">
                            <a href="#" id="emailHelp" class="form-text-muted text-decoration-none"> ¿Has olvidado tu contraseña?</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <!--script src="assets/js/script.js"></script-->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>