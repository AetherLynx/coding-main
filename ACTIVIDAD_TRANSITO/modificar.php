<?php
    $msgoutput = "Se ha actualizado el registro exitosamente!";
    
    if (isset($_POST['modificar'])) {

        $cedula = $_POST["cedulanew"];
        $nombre = $_POST["nombrenew"];
        $placa = $_POST["placanew"];
        $tipovehiculo = $_POST["tipovehiculonew"];
        $pagos = $_POST["pagosnew"];
        $tecnomecanica = $_POST["tecnomecanicanew"];
        $telefono = $_POST["telefononew"];
        $correo = $_POST["correonew"];

        $sql = "UPDATE usuario SET cedula='$cedula', nombre='$nombre', placa='$placa', tipovehiculo='$tipovehiculo', pagos='$pagos', tecnomecanica='$tecnomecanica', telefono='$telefono', correo='$correo' WHERE cedula='$cedula'";

    } elseif (isset($_POST['modificarmult'])) {

        $cedula = $_POST["cedulanew"];
        $multas = $_POST['multas'];
        $valormult = $_POST['valormult'];
        $sql = "UPDATE usuario SET multas='$multas', valormult='$valormult' WHERE cedula='$cedula'";

    } elseif (isset($_POST['eliminar'])) {

        $cedula = $_POST["cedulanew"];
        $msgoutput = "Sus datos han sido eliminados exitosamente.";
        $sql = "DELETE FROM usuario WHERE cedula='$cedula'";

    }

    if ($conn->query($sql) === TRUE) {
        echo $msgoutput;
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
?>