<?php 
include "conexion.php";
$ci = isset($_GET['ci']) ? $_GET['ci'] : '';
session_start();
if (!isset($_SESSION['ci'])) {
    header("Location: ../index.php");
    exit();
}

$ciDuenio = $_SESSION['ci'];

$sql = "SELECT * FROM catastro WHERE ciDuenio = '$ciDuenio'";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Dueño</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <?php include "navBar.php"; ?>
    
    <div class="container mt-5 content">
        <h2 class="text-center mb-4">Bienvenido Dueño</h2>
        <h4 class="text-center mb-4">Mis propiedades registradas en catastro:</h4>
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Zona</th>
                    <th>Distrito</th>
                    <th>Superficie (m²)</th>
                    <th>X Inicial</th>
                    <th>Y Inicial</th>
                    <th>X Final</th>
                    <th>Y Final</th>
                    <th>CI Dueño</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($resultado) > 0) {
                    while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td><?php echo $fila["id"]; ?></td>
                            <td><?php echo $fila["zona"]; ?></td>
                            <td><?php echo $fila["distrito"]; ?></td>
                            <td><?php echo $fila["superficie"]; ?></td>
                            <td><?php echo $fila["xini"]; ?></td>
                            <td><?php echo $fila["yini"]; ?></td>
                            <td><?php echo $fila["xfin"]; ?></td>
                            <td><?php echo $fila["yfin"]; ?></td>
                            <td><?php echo $fila["ciDuenio"]; ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="9" class="text-center">No hay propiedades registradas.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <div class="text-right">
            <a href="../uno/registro/login.php" class="btn btn-danger">Salir de Catastro</a>
        </div>
    </div>
    
    <?php include "../uno/footer.php"; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
