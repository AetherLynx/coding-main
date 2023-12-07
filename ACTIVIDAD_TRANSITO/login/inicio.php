<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/428d17dc40.js" crossorigin="anonymous"></script>
    <script src="../script.js" type="module"></script>

    <title>Pagina de inicio</title>
</head>

<body>
    <div class="innerbody">
        <h1><i class="fa-solid fa-face-laugh-beam fa-lg"></i> Hola, <?php echo $_SESSION['username']; ?>!</h1>
        <sub>Esta es tu página de inicio de sesión, puedes ver tu información más importante sobre tu cuenta y noticias.</sub>
    </div><br><br>
    <h1>Tu resumen de hoy</h1>
    <div class="rowth">
        <div class="innerbody" style="height: auto;">
            <h1>NOTICIAS</h1>
            <h3>Aumento en multa, dias pico y placa</h3>
            <sub>El valor de la multa por sacar el carro en dia de pico y placa aumenta. Dic. 06, 2023</sub><br><br>
            <img class=" img-xs" src="../files/img1.png"><br><br>
            <h3>Aumento en multa, dias pico y placa</h3>
            <sub>El valor de la multa por sacar el carro en dia de pico y placa aumenta. Dic. 06, 2023</sub><br><br>
            <img class="img-xs" src="../files/img2.png">
        </div>

        <div class="innerbody">
            <h1>TUS DATOS</h1>
            <div style="display:flex; flex-direction: column; justify-content: space-between; align-items: flex-start;">
                <div><i class="fa-solid fa-address-card"></i> Cédula<input type="text" value="<?php echo $_SESSION['cedula']; ?>" readonly></div>
                <div><i class="fa-solid fa-user-tag"></i> Nombre<input type="text" value="<?php echo $_SESSION['nombre']; ?>" readonly></div>
                <div><i class="fa-solid fa-hashtag"></i> Placa<input type="text" value="<?php echo $_SESSION['placa']; ?>" readonly></div>
                <div><i class="fa-solid fa-car-side"></i> Tipo de Vehículo<input type="text" value="<?php echo $_SESSION['tipovehiculo']; ?>" readonly></div>
                <div><i class="fa-solid fa-dollar-sign"></i> Pagos<input type="text" value="<?php echo $_SESSION['pagos']; ?>" readonly></div>
                <div><i class="fa-solid fa-wrench"></i> Tecnomecanica<input type="text" value="<?php echo $_SESSION['tecnomecanica']; ?>" readonly></div>
                <div><i class="fa-solid fa-phone"></i> Telefono<input type="text" value="<?php echo $_SESSION['telefono']; ?>" readonly></div>
                <div><i class="fa-solid fa-envelope"></i> Correo<input type="text" value="<?php echo $_SESSION['correo']; ?>" readonly></div>
                <div><i class="fa-solid fa-triangle-exclamation"></i> Multas<input type="text" value="<?php echo $_SESSION['multas']; ?>" readonly></div>
                <div><i class="fa-solid fa-money-check-dollar"></i> Cuota multas<input type="text" value="<?php echo $_SESSION['valormult']; ?>" readonly></div>
            </div>
        </div>
    </div>
    <a href=" logout.php" class="topbt" style="left: -10px; bottom: 0px;"><i class="fa-solid fa-right-from-bracket fa-lg"></i><span>Cerrar Sesión</span></a>
</body>

</html>