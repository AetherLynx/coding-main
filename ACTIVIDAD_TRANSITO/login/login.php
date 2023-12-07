<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/428d17dc40.js" crossorigin="anonymous"></script>
    <script src="../script.js" type="module"></script>

    <title>PÁGINA PRINCIPAL</title>
</head>

<body>
    <h1>¡Bienvenido al portal de Log-in!</h1><br>
    <div class="innerbody">
        <h2>Introduzca sus datos</h2>
        <form action="validar.php" method="post">
            <i class="fa-solid fa-address-card fa-lg"></i> <input type="text" name="cedula" placeholder="Cédula de Ciudadania" autocomplete="off" required><br>
            <i class="fa-solid fa-user fa-lg"></i> <input type="text" name="username" placeholder="Usuario" autocomplete="off" required><br>
            <i class="fa-solid fa-key fa-lg"></i> <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit" name="login"><i class="fa-solid fa-right-to-bracket fa-lg"></i> Iniciar sesión</button>
        </form>
    </div>

    <a href="../main.php" class="topbt" style="left: -10px; bottom: 0px;"><i class="fa-solid fa-angles-left fa-lg"></i><span>Portal de Tránsito</span></a>
    <a href="register.php" class="topbt" style="left: -10px; bottom: 70px;"><i class="fa-solid fa-pen fa-lg"></i><span>Registro</span></a>
</body>

</html>