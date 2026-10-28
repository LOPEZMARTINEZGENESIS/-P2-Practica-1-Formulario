<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "patrick_ta_db";

$conexion = new mysqli($host, $user, $pass, $dbname);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>