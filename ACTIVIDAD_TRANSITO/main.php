<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>PÁGINA PRINCIPAL</title>
</head>
<body>
    <div class="innerbody">
        <h2>Página del Tránsito</h2>
        <p>Bienvenido a la pagina del tránsito, en este portal podrás registrarte, modificar y consultar tus
            datos.
        </p>
    </div>
    <br>    
    <div class="innerbody" style="width:380px;">
    <h3>Aquí se ejecutarán las acciones.</h3>
    <?php
        include("conexion.php");
            if (isset($_POST['registrar'])) {
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
                echo "El usuario fue registrado exitosamente!<br>Por favor presione Reiniciar Página.";
                } else {
                echo "Error al registrar datos: " . $conn->error;
                }
                $conn->close();

            } elseif (isset($_POST['modificar'])) {
                $cedula = $_POST["cedulanew"];
                $nombre = $_POST["nombrenew"];
                $placa = $_POST["placanew"];
                $tipovehiculo = $_POST["tipovehiculonew"];
                $pagos = $_POST["pagosnew"];
                $tecnomecanica = $_POST["tecnomecanicanew"];
                $telefono = $_POST["telefononew"];
                $correo = $_POST["correonew"];

                $sql = "UPDATE usuario SET cedula='$cedula', nombre='$nombre', placa='$placa', tipovehiculo='$tipovehiculo', pagos='$pagos', tecnomecanica='$tecnomecanica', telefono='$telefono', correo='$correo' WHERE cedula='$cedula'";

                if ($conn->query($sql) === TRUE) {
                    echo "Se ha actualizado el registro exitosamente!<br>Por favor presione Reiniciar Página.";
                } else {
                    echo "Error al actualizar el registro: " . $conn->error;
                }

            } elseif (isset($_POST['buscar'])) {
                $cedula = $_POST['cedula_buscar'];
                $sql = "SELECT * FROM usuario WHERE cedula=$cedula";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                $row = $resultado->fetch_assoc();
                $cedula = $row['cedula'];
                $nombre = $row["nombre"];
                $placa = $row["placa"];
                $tipovehiculo = $row["tipovehiculo"];
                $pagos = $row["pagos"];
                $tecnomecanica = $row["tecnomecanica"];
                $telefono = $row["telefono"];
                $correo = $row["correo"];

                echo "<h2>Revise o modifique sus datos.</h2>
            <form action='main.php' method='post'>
                <sub>CÉDULA</sub>
                <input type='number' name='cedulanew' value='$cedula' readonly>
                <br>
                <sub>NOMBRE</sub>
                <input type='text' name='nombrenew' maxlength='40' value='$nombre'  required>
                <br>
                <sub>PLACA</sub>
                <input type='text' name='placanew' value='$placa' readonly>
                <br>
                <sub>TIPO DE VEHICULO</sub>
                <input type='text' name='tipovehiculonew' value='$tipovehiculo' readonly>
                <br>
                <sub>ESTADO DE PAGOS</sub>
                <input type='text' name='pagosnew' value='$pagos' readonly>
                <br>
                <sub>TECNOMECÁNICA</sub>
                <input type='text' name='tecnomecanicanew' value='$tecnomecanica' readonly>
                <br>
                <sub>TELÉFONO</sub>
                <input type='number' name='telefononew' maxlength='40' value='$telefono' required>
                <br>
                <sub>CORREO ELECTRÓNICO</sub>
                <input type='text' name='correonew' maxlength='40' value='$correo' required>
                <br>
                <input type='submit' value='Modificar datos' name='modificar'>
            </form>";
                }
            }
    ?>  
    </div>
    <br>
    <a href="main.php">Reiniciar página</a>
    <br>
    <div class="rowth">
        <div class="innerbody">
            <h2>Registro de usuario</h2>
            <form action="main.php" method="post">
                <sub>CÉDULA</sub>
                <input type="number" name="cedula" maxlength="40" required>
                <br>
                <sub>NOMBRE</sub>
                <input type="text" name="nombre" maxlength="40" required>
                <br>
                <sub>PLACA</sub>
                <input type="text" name="placa" maxlength="40" required>
                <br>
                <sub>TIPO DE VEHICULO</sub>
                <input type="text" name="tipovehiculo" maxlength="40" required>
                <br>
                <sub>ESTADO DE PAGOS</sub>
                <select name="pagos">
                    <option value="Al dia">Al día</option>
                    <option value="Moroso">Moroso</option>
                    <option value="Sin pagos">Sin pagos</option>
                </select>
                <br>
                <sub>TECNOMECÁNICA</sub>
                <select name="tecnomecanica">
                    <option value="Validada">Validada</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Rechazada">Rechazada</option>
                </select>
                <br>
                <sub>TELÉFONO</sub>
                <input type="number" name="telefono" maxlength="40" required>
                <br>
                <sub>CORREO ELECTRÓNICO</sub>
                <input type="text" name="correo" maxlength="40" required>
                <br>
                <input type="submit" value="Registrar" name="registrar">
            </form>
        </div>
        <div class="innerbody">
            <h2>Modificar datos</h2>
        <form action="main.php" method="post">
            <sub>Buscar por cédula:</sub><br>
            <input type="text" name="cedula_buscar" required><br>
            <input type="submit" name="buscar" value="Buscar">
        </form>
    </div>
    </div>
</body>
</html>