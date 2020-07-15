<?php
include 'conexion.php';

$name = utf8_decode($_POST['nombre']);
$correo = utf8_decode($_POST['correo']);
$telefono = utf8_decode($_POST['celular']);
$interes = utf8_decode($_POST['interes']);


if (!empty($name) && !empty($telefono) && !empty($correo) ) {
    $query = "INSERT INTO cotizacionhbc(nombre, correo, celular, comentarios) VALUES ('$name', '$correo', '$telefono', '$interes')";
    if ($conexion->query($query)) {
        echo "<script>location='gracias.php'</script>";
    } else {
        die($conexion->error);
    }
} else {
    echo 'hubo un error al procesar la solicitud';
}
