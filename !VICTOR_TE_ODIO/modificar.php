<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="esotilin.css">
<?php
include("conexion.php");
if (isset($_POST['modificar'])) {
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $placa = $_POST["placa"];
    $tecnomecanica = $_POST["tecnomecanica"];
    $modelo = $_POST["modelo"];
    $multas = $_POST["multas"];
    $telefono = $_POST["telefono"];
    $sql = "UPDATE usuario SET cedula='$cedula', nombre='$nombre', placa='$placa', tecnomecanica='$tecnomecanica', modelo='$modelo', multas='$multas', telefono='$telefono' WHERE cedula='$cedula'";
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado el registro correctamente<br><a href='main.php'>Volver</a>";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
} elseif (isset($_POST['eliminar'])) {
    $cedula = $_POST["cedula"];
    $sql = "DELETE FROM usuario WHERE cedula='$cedula'";

    if ($conn->query($sql) === TRUE) {
        echo "Se han eliminados sus datos<br><a href='main.php'>Volver</a>";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}
