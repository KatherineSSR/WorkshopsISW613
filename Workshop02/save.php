<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root"; 
        $password = "";     
        $dbname = "workshop02";

        //conectar
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $nombre   = $_POST['name'];
        $apellido = $_POST['surname'];
        $correo   = $_POST['correo'];
        $telefono = $_POST['telefono'];

        $sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono)
                VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro guardado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>
    
</body>
</html>