<?php
include("conexion.php");
$connection = conectar();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $stmt = $connection->prepare("SELECT pass FROM table_login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPwdFromDB = $row["pass"];

        if (password_verify($password, $hashedPwdFromDB)) {
            header("Location: index.php");
            exit(); 
        } else {
            echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
    }

    $stmt->close();
    $connection->close();
}
?>
