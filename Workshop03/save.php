<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $provincia = $_POST['provincia'];

    $sql = "INSERT INTO usuarios (nombre, apellidos, cedula, provincia_id)
            VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nombre, $apellidos, $cedula, $provincia);

    if ($stmt->execute()) {
        header("Location: login.php?username=" . urlencode($nombre));
        exit();
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
