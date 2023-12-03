<?php
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $placa = $_POST["placa"];
    $tipovehiculo = $_POST["tipovehiculo"];
    $pagos = $_POST["pagos"];
    $tecnomecanica = $_POST["tecnomecanica"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $sql = "INSERT INTO usuario (cedula, nombre, placa, tipovehiculo, pagos, tecnomecanica, telefono, correo) VALUES ('$cedula', '$nombre', '$placa', '$tipovehiculo', '$pagos', '$tecnomecanica', '$telefono', '$correo')";

    if ($conn->query($sql) === TRUE) {
    echo "El usuario fue registrado exitosamente!";
    } else {
    echo "Error al registrar datos: " . $conn->error;
    }
    $conn->close();

?>