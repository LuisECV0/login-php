<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
                <?php
                    include("./modelo/conexion.php");
                    include("./modelo/control-registro.php");
                ?>
                <h1>Crear una cuenta</h1>
                <input type="text" id="name" name="name" placeholder="Name" />
                <input type="email" id="email" name="email" placeholder="Email" />
                <input type="password" id="pass" name="pass" placeholder="Password" />
                <input class="button" type="submit" name="registrar" value="registrar">
                 

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>¡Hola!</h1>
                    <p>Comienza tu viaje con nosotros.</p>
                    <a href="./login.php">Sing up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
