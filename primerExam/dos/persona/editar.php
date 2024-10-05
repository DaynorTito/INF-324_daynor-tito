<?php 
include "../conexion.php";

if (isset($_GET["ci"])) {
    $ci = mysqli_real_escape_string($conn, $_GET["ci"]);
    $sql = "SELECT * FROM persona WHERE ci = '$ci'";
    $resultado = mysqli_query($conn, $sql);
    
    if ($fila = mysqli_fetch_array($resultado)) {
        $nombre = $fila["nombre"];
        $paterno = $fila["paterno"];
        $materno = $fila["materno"];
        $direccion = $fila["direccion"];
        $rol = $fila["rol"];
    } else {
        echo "Persona no encontrada.";
        exit();
    }
}
?>
<html>
<head>
    <title>Editar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
            <h2 class="text-center mb-4">Editar Persona</h2>
            <form action="guardar.php" method="post">
                <input type="hidden" name="ci" value="<?php echo $ci; ?>">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" required>
                </div>
                <div class="form-group">
                    <label for="paterno">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="paterno" value="<?php echo $paterno; ?>" required>
                </div>
                <div class="form-group">
                    <label for="materno">Apellido Materno:</label>
                    <input type="text" class="form-control" name="materno" value="<?php echo $materno; ?>">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" required>
                </div>
                <div class="form-group">
                    <label for="rol">Rol:</label>
                    <select class="form-control" name="rol">
                        <option value="duenio" <?php echo ($rol == 'duenio') ? 'selected' : ''; ?>>Dueño</option>
                        <option value="funcionario" <?php echo ($rol == 'funcionario') ? 'selected' : ''; ?>>Funcionario</option>
                        <option value="admin" <?php echo ($rol == 'admin') ? 'selected' : ''; ?>>Administrador</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cancelar</button>
            </form>
        </div>
    </div>
</body>
</html>
