<?php 
include "../conexion.php";

if (isset($_GET["id"])) {
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "SELECT * FROM catastro WHERE id = '$id'";
    $resultado = mysqli_query($conn, $sql);
    
    if ($fila = mysqli_fetch_array($resultado)) {
        $zona = $fila["zona"];
        $distrito = $fila["distrito"];
        $superficie = $fila["superficie"];
        $xini = $fila["xini"];
        $yini = $fila["yini"];
        $xfin = $fila["xfin"];
        $yfin = $fila["yfin"];
        $ciDuenio = $fila["ciDuenio"];
    } else {
        echo "Catastro no encontrado.";
        exit();
    }
}
?>
<html>
<head>
    <title>Editar Catastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
            <h2 class="text-center mb-4">Editar Catastro</h2>
            <form action="guardar_catastro.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="zona">Zona:</label>
                    <input type="text" class="form-control" name="zona" value="<?php echo $zona; ?>" required>
                </div>
                <div class="form-group">
                    <label for="distrito">Distrito:</label>
                    <input type="text" class="form-control" name="distrito" value="<?php echo $distrito; ?>">
                </div>
                <div class="form-group">
                    <label for="superficie">Superficie:</label>
                    <input type="number" step="0.01" class="form-control" name="superficie" value="<?php echo $superficie; ?>">
                </div>
                <div class="form-group">
                    <label for="xini">X Inicial:</label>
                    <input type="number" step="0.000001" class="form-control" name="xini" value="<?php echo $xini; ?>" required>
                </div>
                <div class="form-group">
                    <label for="yini">Y Inicial:</label>
                    <input type="number" step="0.000001" class="form-control" name="yini" value="<?php echo $yini; ?>" required>
                </div>
                <div class="form-group">
                    <label for="xfin">X Final:</label>
                    <input type="number" step="0.000001" class="form-control" name="xfin" value="<?php echo $xfin; ?>" required>
                </div>
                <div class="form-group">
                    <label for="yfin">Y Final:</label>
                    <input type="number" step="0.000001" class="form-control" name="yfin" value="<?php echo $yfin; ?>" required>
                </div>
                <div class="form-group">
                    <label for="ciDuenio">CI del Dueño:</label>
                    <input type="text" class="form-control" name="ciDuenio" value="<?php echo $ciDuenio; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cancelar</button>
            </form>
        </div>
    </div>
</body>
</html>
