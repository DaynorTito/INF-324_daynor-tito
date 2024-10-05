<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ci = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT rol, contrasena FROM persona WHERE ci = '$ci'";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $hashedPassword = $fila['contrasena'];

        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION['rol'] = $fila['rol'];
            $_SESSION['ci'] = $ci;
            header("Location: index.php?rol=" . urlencode($fila['rol']) . "&ci=" . urlencode($ci));
            exit();
        } else {
            echo "<script>alert('Credenciales incorrectas.'); window.location.href='../uno/registro/login.php';</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado.'); window.location.href='../uno/registro/login.php';</script>";
    }
}
?>
