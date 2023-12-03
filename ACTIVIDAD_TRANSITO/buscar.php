<?php
if (isset($_POST['buscar']) || isset($_POST['buscarmult'])) {
    $cedula = $_POST['cedula_buscar'];
    $sql = "SELECT * FROM usuario WHERE cedula=$cedula";
} elseif (isset($_POST['buscarplac'])) {
    $placa = $_POST['placa_buscar'];
    $sql = "SELECT * FROM usuario WHERE placa='$placa'";
}

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
    $multas = $row["multas"];
    $valormult = $row["valormult"];

    if (isset($_POST['buscar']) || isset($_POST['buscarplac'])) {
        echo "<h2>Estos son sus datos actuales.</h2>
                    <form method='post'>
                        <sub>CÉDULA</sub>
                        <input type='number' name='cedulanew' value='$cedula' readonly>
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
                        <sub>MULTAS PENDIENTES</sub>
                        <input type='text' name='multas' maxlength='40' value='$multas' readonly>
                        <br>
                        <sub>VALOR A PAGAR (MULTAS)</sub>
                        <input type='number' name='valormult' maxlength='40' value='$valormult' readonly>
                        <h2>Puede modificar estos datos.</h2>
                        <sub>NOMBRE</sub>
                        <input type='text' name='nombrenew' maxlength='40' value='$nombre' autocomplete='off' required>
                        <br>
                        <sub>TELÉFONO</sub>
                        <input type='number' name='telefononew' maxlength='40' value='$telefono' autocomplete='off' required>
                        <br>
                        <sub>CORREO ELECTRÓNICO</sub>
                        <input type='text' name='correonew' maxlength='40' value='$correo' autocomplete='off' required>
                        <br>
                        <button type='submit' name='modificar'><i class='fa-solid fa-pen-to-square'></i> Actualizar datos</button>
                        <button type='submit' name='eliminar'><i class='fa-solid fa-eraser'></i> Borrar datos</button>
                        <a href='main.php'><i class='fa-solid fa-xmark'></i> Cancelar</a>
                    </form>";
    } elseif (isset($_POST['buscarmult'])) {
        echo "<h2>Datos del usuario</h2>
                    <form method='post'>
                        <sub>CÉDULA</sub>
                        <input type='number' name='cedulanew' value='$cedula' readonly>
                        <br>
                        <sub>NOMBRE</sub>
                        <input type='text' name='nombrenew' maxlength='40' value='$nombre'  readonly>
                        <br>
                        <sub>PLACA</sub>
                        <input type='text' name='placanew' value='$placa' readonly>
                        <br>
                        <sub>TIPO DE VEHICULO</sub>
                        <input type='text' name='tipovehiculonew' value='$tipovehiculo' readonly>
                        <br>
                        <sub>TECNOMECÁNICA</sub>
                        <input type='text' name='tecnomecanicanew' value='$tecnomecanica' readonly>
                        <br>
                        <sub>TELÉFONO</sub>
                        <input type='number' name='telefononew' maxlength='40' value='$telefono' readonly>
                        <br>
                        <sub>CORREO ELECTRÓNICO</sub>
                        <input type='text' name='correonew' maxlength='40' value='$correo' readonly>
                        <h2>Modificar datos de multas</h2>
                        <sub>MULTAS PENDIENTES</sub>
                        <input type='text' name='multas' maxlength='40' value='$multas' autocomplete='off' required>
                        <br>
                        <sub>VALOR A PAGAR (MULTAS)</sub>
                        <input type='number' name='valormult' maxlength='40' value='$valormult' autocomplete='off' required>
                        <br>
                        <sub>ESTADO DE PAGOS</sub>
                        <select name='pagosnew'>
                            <option value='Al dia'>Al día</option>
                            <option value='Moroso'>Moroso</option>
                            <option value='Sin pagos'>Sin pagos</option>
                        </select>
                        <br>
                        <button type='submit' name='modificarmult'><i class='fa-solid fa-pen-to-square'></i>Actualizar datos</button>
                        <a href='main.php'><i class='fa-solid fa-xmark'></i> Cancelar</a>
                    </form>";
    }
} else {
    echo "<i class='fa-solid fa-triangle-exclamation fa-2xl'></i><br><h2>No se encontró un usuario con la Cédula o Placa introducida.</h2><p>Por favor vuelva a intentarlo.</p>";
}
