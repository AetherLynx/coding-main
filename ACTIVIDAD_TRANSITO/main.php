<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/428d17dc40.js" crossorigin="anonymous"></script>
    <script src="script.js" type="module"></script>

    <title>PÁGINA PRINCIPAL</title>
</head>

<body>
    <div class="topbar">
        <h1> <i class="fa-solid fa-address-book"></i> Página del Tránsito de Cali</h1>
    </div>
    <br>
    <div class="innerbody" style="width:auto; background-color: #222222; border-color: #503165;">
        <?php
        include("conexion.php");
        if (isset($_POST['registrar'])) {
            include("registrar.php");
        } elseif (isset($_POST['modificar']) || isset($_POST['modificarmult']) || isset($_POST['eliminar'])) {
            include("modificar.php");
        } elseif (isset($_POST['buscar']) || isset($_POST['buscarplac']) || isset($_POST['buscarmult'])) {
            include("buscar.php");
        } else {
            echo "<h3 border='none'>Cuando haga una consulta, aquí aparecerá.</h3>";
        }
        ?>
    </div>
    <div class="rowth">
        <div class="innerbody">
            <h2><i class="fa-solid fa-pen"></i> Registro de usuario</h2>
            <div>
                <form method="post">
                    <sub>CÉDULA</sub>
                    <input type="number" name="cedula" maxlength="40" autocomplete="off" required>
                    <br>
                    <sub>NOMBRE</sub>
                    <input type="text" name="nombre" maxlength="40" autocomplete="off" required>
                    <br>
                    <sub>PLACA</sub>
                    <input type="text" name="placa" maxlength="40" autocomplete="off" required>
                    <br>
                    <sub>TIPO DE VEHICULO</sub>
                    <input type="text" name="tipovehiculo" maxlength="40" autocomplete="off" required>
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
                    <input type="number" name="telefono" maxlength="40" autocomplete="off" required>
                    <br>
                    <sub>CORREO ELECTRÓNICO</sub>
                    <input type="text" name="correo" maxlength="40" autocomplete="off" required>
                    <br>
                    <button type="submit" name="registrar"><i class="fa-solid fa-pen-to-square"></i> Registrar</button>
                </form>
            </div>
        </div>
        <div class="innerbody">
            <h2><i class="fa-solid fa-magnifying-glass"></i> Consultar datos</h2>
            <p>Puede modificar o consultar sus datos, puede consultar por cédula o por placa.</p><br>

            <h2><i class="fa-solid fa-id-card"></i> Buscar por cédula</h2>
            <form method="post">
                <sub>Cédula:</sub>
                <input type="text" name="cedula_buscar" placeholder="Cedula de Ciudadanía" autocomplete="off" required><br>
                <button type="submit" name="buscar"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            </form>

            <h2><i class="fa-solid fa-car-on"></i> Buscar por placa vehicular</h2>
            <form method="post">
                <sub>Placa:</sub>
                <input type="text" name="placa_buscar" placeholder="Placa de su Vehículo" autocomplete="off" required><br>
                <button type="submit" name="buscarplac"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            </form>
        </div>

        <div class="innerbody">
            <h2>Admin: Modificar Multas</h2>
            <h2><i class="fa-solid fa-id-card"></i> Introduzca la cédula</h2>
            <form method="post">
                <sub>Cédula:</sub>
                <input type="text" name="cedula_buscar" placeholder="Cedula de Ciudadanía" autocomplete="off" required><br>
                <button type="submit" name="buscarmult"><i class="fa-solid fa-magnifying-glass"></i> Buscar
                    usuario</button>
            </form>
        </div>
    </div>
    <a href="main.php" class="restart-cont" id="restart"><i id="restart-icon" class="fa-solid fa-arrows-rotate fa-lg"></i><span id="restart-text">Reiniciar página</span></a>
    <div class="zoom-cont">
        Zoom: <span id="zoomvalue">0.95</span>
        <button id="zoomin"><i class="fa-solid fa-magnifying-glass-plus fa-lg"></i></button>
        <button id="zoomout"><i class="fa-solid fa-magnifying-glass-minus fa-lg"></i></button>
        <button id="reset"><i class="fa-solid fa-arrows-rotate"></i></button>
    </div>
</body>

</html>