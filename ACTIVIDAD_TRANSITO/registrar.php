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
        <h2>Registrar Usuario</h2>
        <p>Bienvenido a la pagina del tránsito, en este portal podrás registrarte, modificar y consultar tus
            datos.
        </p>
        <form method="post" action="registrar.php">
            <button name="registrar">Registrar Usuario</button>
        </form>
        <form method="post" action="modificar.php">
            <button name="modificar">Modificar Usuario</button>
        </form>
        <form method="post" action="consultar.php">
            <button name="buscar" type="submit">Consultar Usuario</button>
        </form>
    </div>
    <div class="innerbody">
        <form action="guardar.php" method="post">
            <sub>Nombre</sub><br>
            <input type="text" name="nombre" maxlength="30" placeholder="Nombre de usuario" required>
            <br>
            <sub>Apellido</sub><br>
            <input type="text" name="apellido" maxlength="30" placeholder="Apellido"  required>
            <br>
            <sub>Correo</sub><br>
            <input type="text" name="correo" maxlength="30" placeholder="Correo electrónico"  required>
            <br>
            <sub>Fecha de Nacimiento</sub><br>
            <input type="date" name="fecha" maxlength="30" required>
            <br>
            <sub>Documento TI o Cédula</sub><br>
            <input type="text" name="documento" maxlength="30" placeholder="Correo electrónico"  required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>