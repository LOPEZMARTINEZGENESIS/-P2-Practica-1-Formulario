<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_cliente     = trim($_POST['nombre']);
    $direccion          = trim($_POST['direccion']);
    $telefono           = trim($_POST['telefono']);
    $metodo_pago        = trim($_POST['metodo_pago']);
    $rubor_seleccionado = trim($_POST['rubor']);
    $cantidad           = intval($_POST['cantidad']);
    
    $precio_unidad = 850;
    $total = $cantidad * $precio_unidad;

    $stmt = $conexion->prepare("INSERT INTO pedidos (nombre_cliente, direccion, telefono, metodo_pago, rubor_seleccionado, cantidad, total) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssid", $nombre_cliente, $direccion, $telefono, $metodo_pago, $rubor_seleccionado, $cantidad, $total);

    if ($stmt->execute()) {
        echo "<script>
                alert('¡Pedido realizado con éxito! Total: $' + $total);
                window.location.href='index.html';
              </script>";
    } else {
        echo "Error: " . $conexion->error;
    }

    $stmt->close();
}
$conexion->close();
?>