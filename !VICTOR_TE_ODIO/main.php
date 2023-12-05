<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="esotilin.css">
    <title>transito</title>
</head>

<body>
    <?php
    include("conexion.php");
    ?>
    <form action="registrar.php" method="post">
        <h1>Registrar usuario</h1>
        <p>Registre un usuario en la base de datos.</p>
        <b>CÉDULA</b><input type="text" name="cedula"><br>
        <b>NOMBRE</b><input type="text" name="nombre"><br>
        <b>PLACA</b><input type="text" name="placa"><br>
        <b>TECNOMECANICA</b><input type="text" name="tecnomecanica"><br>
        <b>MODELO</b><input type="text" name="modelo"><br>
        <b>CANTIDAD MULTAS</b><input type="text" name="multas"><br>
        <b>NUMERO TELEFONO</b><input type="text" name="telefono"><br>
        <button type="submit" name="registrar">Registrar datos</button>
    </form>

    <form action="buscar.php" method="post">
        <h1>Buscar usuario por cedula</h1>
        <p>Acceda a los datos de un usuario por una cedula.</p>
        <b>CÉDULA</b><input type="text" name="cedula_buscar"><br>
        <button type="submit" name="cedula_buscar_bt">Buscar cédula</button>
    </form>
    <form action="buscar.php" method="post">
        <h1>Buscar usuario por placa</h1>
        <p>Acceda a los datos de un usuario por su placa vehicular.</p>
        <b>PLACA</b><input type="text" name="placa_buscar"><br>
        <button type="submit" name="placa_buscar_bt">Buscar placa</button>
    </form>
</body>

</html>