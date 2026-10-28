<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = trim($_POST['nombre']);
    $email    = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkEmail = $conexion->prepare("SELECT id FROM usuarios WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $res = $checkEmail->get_result();

    if ($res->num_rows > 0) {
        echo "<script>alert('El correo ya está registrado.'); window.history.back();</script>";
    } else {
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $email, $password);

        if ($stmt->execute()) {
            echo "<script>alert('¡Registro exitoso! Ya puedes iniciar sesión.'); window.location.href='index.html';</script>";
        } else {
            echo "Error: " . $conexion->error;
        }
        $stmt->close();
    }
    $checkEmail->close();
}
$conexion->close();
?>