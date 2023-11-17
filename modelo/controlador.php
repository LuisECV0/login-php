<?php
include("conexion.php");
$connection = conectar();
 
if (!empty($_POST["sing-up"])) {
    if (empty($_POST["email"]) || empty($_POST["pass"])) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $email = $_POST["email"];
        $clave = $_POST["pass"];

        $sql = $connection->prepare("SELECT * FROM table_login WHERE email = ? AND pass = ?");
        $sql->bind_param("ss", $email, $clave);
        $sql->execute();
        $resultado = $sql->get_result();

        if ($resultado->num_rows > 0) {
            echo '<div class="alert alert-success">Inicio de sesión correcto</div>';
      
        } else {
            echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
        }

        $sql->close();
    }
}

?>