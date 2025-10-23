<?php
include 'conexion.php';
include 'objUsuario.php';

class User {
    public function save($conn, $nombre, $apellidos, $cedula, $provincia) {

        $usuario = new Usuario($nombre, $apellidos, $cedula, $provincia);

            $sql = "INSERT INTO usuarios (nombre, apellidos, cedula, provincia_id)
                    VALUES (?, ?, ?, ?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $usuario->getNombre(), $usuario->getApellidos(), $usuario->getCedula(), $usuario->getProvincia());

        if ($stmt->execute()) {
            header("Location: login.php?username=" . urlencode($nombre));
            exit();
        } else {
            echo "Error al registrar: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = new User();
    $user->save($conn, $_POST['nombre'], $_POST['apellidos'], $_POST['cedula'], $_POST['provincia']);
}
?>
