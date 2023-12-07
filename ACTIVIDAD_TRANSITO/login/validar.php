<link href="style.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/428d17dc40.js" crossorigin="anonymous"></script>
<?php
include("../conexion.php");
session_start();
if (isset($_POST['login'])) {

    $cedula = $_POST['cedula'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM logindata WHERE username = '$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['cedula'] = $cedula;

        $sql = "SELECT * FROM usuario WHERE cedula='$cedula'";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();
            $_SESSION['cedula'] = $row['cedula'];
            $_SESSION['nombre'] = $row["nombre"];
            $_SESSION['placa'] = $row["placa"];
            $_SESSION['tipovehiculo'] = $row["tipovehiculo"];
            $_SESSION['pagos'] = $row["pagos"];
            $_SESSION['tecnomecanica'] = $row["tecnomecanica"];
            $_SESSION['telefono'] = $row["telefono"];
            $_SESSION['correo'] = $row["correo"];
            $_SESSION['multas'] = $row["multas"];
            $_SESSION['valormult'] = $row["valormult"];
        }
        header("location: inicio.php");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href = 'login.php';</script>";
    }
} elseif (isset($_POST['register'])) {
    $cedula = $_POST['cedula'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE cedula = '$cedula'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "INSERT INTO logindata (cedula, username, password) VALUES ('$cedula', '$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Usuario registrado exitosamente'); window.location.href = 'login.php';</script>";
        } else {
            echo "Error al registrar datos: " . $conn->error;
        }
        $conn->close();
    } else {
        echo "<script>alert('La cedula debe pertenecer a un usuario registrado en la base de tránsito!'); window.location.href = 'register.php';</script>";
    }
}
