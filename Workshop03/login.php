<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="form-container">
    <h2>Iniciar Sesión</h2>

    <form action="validar_login.php" method="POST">
        <label>Nombre de usuario:</label><br>
        <input type="text" name="nombre" 
               value="<?= isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '' ?>" required><br>

        <label>Cédula:</label><br>
        <input type="text" name="cedula" required><br><br>

        <input type="submit" value="Ingresar">
    </form>
</div>
</body>
</html>
