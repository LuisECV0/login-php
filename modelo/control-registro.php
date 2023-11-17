<?php
include("conexion.php");
$connection = conectar();

if (!empty($_POST["registrar"])) {
    
    if (empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["name"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $email = $_POST["email"];
        $clave = $_POST["pass"];
        $name = $_POST["name"];

        // Verificar si el usuario ya existe
        $check_user = $connection->prepare("SELECT * FROM table_login WHERE email = ?");
        $check_user->bind_param("s", $email);
        $check_user->execute();
        $existing_user = $check_user->get_result();

        if ($existing_user->num_rows > 0) {
            echo '<div class="alert alert-warning">El usuario ya existe</div>';
        } else {
            // Insertar nuevo usuario
            $insert_user = $connection->prepare("INSERT INTO table_login (email, pass, name) VALUES (?, ?, ?)");
            $insert_user->bind_param("sss", $email, $clave, $name);
            $insert_user->execute();

            if ($insert_user) {
                echo '<div class="alert alert-success">Registro exitoso</div>';
            } else {
                echo '<div class="alert alert-danger">Error en el registro</div>';
            }

            $insert_user->close();
        }

        $check_user->close();
    }
}
?>
