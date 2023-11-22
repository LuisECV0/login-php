<?php

if (!function_exists('conectar')) {
 
    function conectar() {
        $user = "root";
        $pass = "";
        $server = "localhost";
        $db = "singUp";
        
        $con = new mysqli($server, $user, $pass, $db);
        
        return $con;
}
}
?>