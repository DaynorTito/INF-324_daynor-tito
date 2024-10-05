<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ci = mysqli_real_escape_string($conn, $_POST['ci']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $paterno = mysqli_real_escape_string($conn, $_POST['paterno']);
    $materno = mysqli_real_escape_string($conn, $_POST['materno']);
    $direccion = mysqli_real_escape_string($conn, $_POST['direccion']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $checkSql = "SELECT * FROM persona WHERE ci = '$ci'";
    $result = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($result) > 0) {
        $mensaje = "El CI ya está registrado. Intenta con otro.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO persona (ci, nombre, paterno, materno, direccion, contrasena, rol) 
                VALUES ('$ci', '$nombre', '$paterno', '$materno', '$direccion', '$hashed_password', 'duenio')";

        if (mysqli_query($conn, $sql)) {
            $mensaje = "Usuario creado correctamente. Inicie sesión.";
        } else {
            $mensaje = "No se pudo crear el usuario: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
<html>
<head>
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-info text-center" role="alert">
            <?php if (isset($mensaje)) echo $mensaje; ?>
        </div>
        <div class="text-center">
            <a href="../uno/registro/login.php" class="btn btn-primary">Iniciar sesión</a>
            <a href="../uno/registro/registro.php" class="btn btn-secondary">Registrar otro usuario</a>
        </div>
    </div>
</body>
</html>
