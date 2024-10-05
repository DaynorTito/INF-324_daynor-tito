<?php 
include "../conexion.php";

if (isset($_POST['ci']) && isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['direccion']) && isset($_POST['contrasena']) && isset($_POST['rol'])) {
    $ci = mysqli_real_escape_string($conn, $_POST['ci']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $paterno = mysqli_real_escape_string($conn, $_POST['paterno']);
    $materno = mysqli_real_escape_string($conn, $_POST['materno']);
    $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $rol = mysqli_real_escape_string($conn, $_POST['rol']);
    $verificarCI = "SELECT * FROM persona WHERE ci = '$ci'";
    $resultado = mysqli_query($conn, $verificarCI);
    
    if (mysqli_num_rows($resultado) > 0) {
        echo "<script>alert('El CI ya está registrado.'); window.location.href='nuevo.php';</script>";
        exit();
    } else {
        $sql = "INSERT INTO persona (ci, nombre, paterno, materno, direccion, contrasena, rol) VALUES ('$ci', '$nombre', '$paterno', '$materno', '$direccion', '$contrasena', '$rol')";
        mysqli_query($conn, $sql);
        
        header("Location: index.php");
        exit();
    }
}
?>
