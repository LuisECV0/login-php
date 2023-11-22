<?php
include("conexion.php");
$connection = conectar();

if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    if (empty($email) || empty($password) || empty($name)) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $hashedPwd = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $connection->prepare("SELECT * FROM table_login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $existing_user = $stmt->get_result();

        if ($existing_user->num_rows > 0) {
            echo '<div class="alert alert-warning">El usuario ya existe</div>';
        } else {
            $stmt = $connection->prepare("INSERT INTO table_login (email, pass, name) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $email, $hashedPwd, $name);
            $stmt->execute();

            if ($stmt) {
                echo '<div class="alert alert-success">Registro exitoso</div>';
            } else {
                echo '<div class="alert alert-danger">Error en el registro</div>';
            }

            $stmt->close();
        }
    }
}
?>
