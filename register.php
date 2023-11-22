<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro</title>
</head>
<body>
    <section>
        <?php
            include("./modelo/control-registro.php");
        ?>

        <div class="container">
            <div class="form-container sign-up-container">
                <form action="register.php" id="register" method="POST">
                    <h1>Crear una cuenta</h1>
                    <input type="text" id="name" name="name" placeholder="Nombre" />
                    <input type="email" id="email" name="email" placeholder="Email" />
                    <input type="password" id="pass" name="pass" placeholder="Contraseña" />
                    <input type="password" id="confirm-pass" name="confirm-pass" placeholder="Confirmar contraseña" />
                    <input class="button" type="submit" name="register" value="Registrar">          
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
    </section>
</body>
</html>
