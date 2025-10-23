<?php
include 'conexion.php';
include 'objUsuario.php';

class Validaciones {
    
    public function validar($conn, $nombre, $cedula) {
        $sql = "SELECT * FROM usuarios WHERE nombre = ? AND cedula = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nombre, $cedula);
        $stmt->execute();
        $result = $stmt->get_result();

        $isValid = $result->num_rows > 0;
        $stmt->close();
        
        return $isValid;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $cedula = $_POST['cedula'] ?? '';

    $validador = new Validaciones();

    if ($validador->validar($conn, $nombre, $cedula)) {
        echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($nombre);
    } else {
        echo "Nombre o cédula incorrectos";
    }
    
    $conn->close();
}
?>
