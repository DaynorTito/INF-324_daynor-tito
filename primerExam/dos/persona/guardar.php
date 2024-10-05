<?php 
include "../conexion.php";

if (isset($_POST['ci']) && isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['direccion']) && isset($_POST['rol'])) {
    $ci = mysqli_real_escape_string($conn, $_POST['ci']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $paterno = mysqli_real_escape_string($conn, $_POST['paterno']);
    $materno = mysqli_real_escape_string($conn, $_POST['materno']);
    $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);
    $rol = mysqli_real_escape_string($conn, $_POST['rol']);
    
    $sql = "UPDATE persona SET nombre='$nombre', paterno='$paterno', materno='$materno', direccion='$direccion', rol='$rol' WHERE ci='$ci'";
    mysqli_query($conn, $sql);
}

header("Location: index.php");
exit();
?>
