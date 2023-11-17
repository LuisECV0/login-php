<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login_Page</title>
</head>
<body>
    <div class="container">
        <div class="form-container sign-in-container">

            <form action="index.php" method="POST">
                <?php
                include("./modelo/conexion.php");
                include("./modelo/controlador.php");
                ?>

                <h1>Login</h1>
                <input type="email" id="email" placeholder="Email" name="email"/>
                <input type="password" id="pass" placeholder="Password" name="pass" />

                <input class="button" type="submit" name="sing-up" value="Ingresar">
                 
            </form>

            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <h1>¡Bienvenido de nuevo!</h1>
                <p>Para mantenerse conectado con nosotros, inicie sesión</p>
                <a href="./register.php">Crear una cuenta</a>
            </div>
        </div>
    </div>
</body>
</html>
