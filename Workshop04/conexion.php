<?php
function conectarDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Workshop03";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");
    return $conn;
}

$conn = conectarDB();
?>
