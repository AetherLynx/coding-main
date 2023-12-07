<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/428d17dc40.js" crossorigin="anonymous"></script>
    <script href="../script.js" type="module"></script>

    <title>PÁGINA PRINCIPAL</title>
</head>

<body>
    <h1>¡Bienvenido al registro de usuario!</h1><br>
    <div class="innerbody">
        <h2>Registrar usuario</h2>
        <sub><i class="fa-solid fa-triangle-exclamation fa-lg"></i> La cédula debe pertenecer a un usuario<br> previo en la base de tránsito.</sub><br><br>
        <form action="validar.php" method="post">
            <i class="fa-solid fa-address-card fa-lg"></i> <input type="text" name="cedula" placeholder="Cédula de Ciudadania" autocomplete="off" required><br>
            <i class="fa-solid fa-user fa-lg"></i> <input type="text" name="username" placeholder="Usuario" autocomplete="off" required><br>
            <i class="fa-solid fa-key fa-lg"></i> <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit" name="register"><i class="fa-solid fa-user-plus fa-lg"></i> Crear Usuario</button>
        </form>
    </div>

    <a href="../main.php" class="topbt" style="left: -10px; bottom: 0px;"><i class="fa-solid fa-angles-left fa-lg"></i><span>Portal de Tránsito</span></a>
    <a href="login.php" class="topbt" style="left: -10px; bottom: 70px;"><i class="fa-solid fa-pen fa-lg"></i><span>Inicio de Sesión</span></a>
</body>

</html>