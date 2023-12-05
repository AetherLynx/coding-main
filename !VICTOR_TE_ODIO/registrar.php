<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="esotilin.css">
<?php
include("conexion.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$placa = $_POST["placa"];
$tecnomecanica = $_POST["tecnomecanica"];
$modelo = $_POST["modelo"];
$multas = $_POST["multas"];
$telefono = $_POST["telefono"];
$sql = "INSERT INTO usuario (cedula, nombre, placa, tecnomecanica, modelo, multas, telefono) VALUES ('$cedula', '$nombre', '$placa', '$tecnomecanica', '$modelo', '$multas', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "El usuario fue registrado exitosamente!<br><a href='main.php'>Volver</a>";
} else {
    echo "Error al registrar datos: " . $conn->error;
}
$conn->close();