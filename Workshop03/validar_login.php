<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];

    $sql = "SELECT * FROM usuarios WHERE nombre = ? AND cedula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre, $cedula);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Inicio de sesión exitoso. Bienvenido, $nombre";
    } else {
        echo "Nombre o cédula incorrectos";
    }

    $stmt->close();
    $conn->close();
}
?>
