<?php
include 'conexion.php';

$query = "SELECT id, nombre FROM provincias";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="form-container">
    <h2>Registro de Usuario</h2>

    <form action="save.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <label for="cedula">Cédula:</label>
        <input type="text" name="cedula" id="cedula" required>

        <label for="provincia">Provincia:</label>
        <select name="provincia" id="provincia" required>
            <option value="">Seleccione una provincia</option>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['nombre']) ?></option>
            <?php } ?>
        </select>

        <input type="submit" value="Registrar">
    </form>

    <div class="login-link">
        <a href="login.php">¿Ya tienes cuenta? Inicia sesión aquí</a>
    </div>
</div>
</body>
</html>
