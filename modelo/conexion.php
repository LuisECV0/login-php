<?php

if (!function_exists('conectar')) {
 
    function conectar() {
        $user = "root";
        $pass = "";
        $server = "localhost";
        $db = "singUp";
        
        $con = new mysqli($server, $user, $pass, $db);
        
        if($con->connect_errno){
            die("Error al conectar a la base de datos: " . $con->connect_error);
        }else {
            echo 'conexion existosaaaa';
        }
        return $con;
}
}
?>