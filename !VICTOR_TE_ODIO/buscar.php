<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="esotilin.css">

<?php
include("conexion.php");

if (isset($_POST['cedula_buscar_bt'])) {
    $cedula = $_POST['cedula_buscar'];
    $sql = "SELECT * FROM usuario WHERE cedula=$cedula";
} elseif (isset($_POST['placa_buscar_bt'])) {
    $placa = $_POST['placa_buscar'];
    $sql = "SELECT * FROM usuario WHERE placa='$placa'";
}

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $cedula = $row["cedula"];
    $nombre = $row["nombre"];
    $placa = $row["placa"];
    $tecnomecanica = $row["tecnomecanica"];
    $modelo = $row["modelo"];
    $multas = $row["multas"];
    $telefono = $row["telefono"];

    if (isset($_POST['cedula_buscar_bt']) || isset($_POST['placa_buscar_bt'])) {
        echo "<form action='modificar.php' method='post'>
        <h1>Modificar usuario</h1>
        <p>Cambie los datos del usuario.</p>
        <b>CÉDULA</b><input type='text' name='cedula' value='$cedula' readonly><br>
        <b>NOMBRE</b><input type='text' name='nombre' value='$nombre' ><br>
        <b>PLACA</b><input type='text' name='placa' value='$placa'  readonly><br>
        <b>TECNOMECANICA</b><input type='text' name='tecnomecanica' value='$tecnomecanica'  readonly><br>
        <b>MODELO</b><input type='text' name='modelo' value='$modelo'  readonly><br>
        <b>CANTIDAD MULTAS</b><input type='text' name='multas' value='$multas'  readonly><br>
        <b>NUMERO TELEFONO</b><input type='text' name='telefono' value='$telefono' ><br>
        <button type='submit' name='modificar'>Modificar datos</button>
        <button type='submit' name='eliminar'>Eliminar datos</button>
    </form><br><a href='main.php'>Volver</a>";
    }
} else {
    echo "No se encontró el usuario <br><a href='main.php'>Volver</a>";
}
