<?php
include "../conexion.php";
$rol = isset($_GET['rol']) ? $_GET['rol'] : null;
$sql = "SELECT * FROM catastro";
$resultado = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>Listado de Catastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <?php include "../navBar.php" ?>
    <div class="container mt-5" style="min-height: calc(70vh - 70px);">
        <h2 class="text-center mb-4">Listado de Catastro</h2>
        <div class="mb-3 text-right">
            <a href="nuevo_catastro.php" class="btn btn-success">Agregar Nuevo Catastro</a>
            <a href="../../siete/index.php" class="btn btn-info">Agregar Nuevo Catastro COMBO BOX</a>
            <a href="../index.php?rol=<?php echo $rol; ?>" class="btn btn-danger">Salir de Catastro</a>
        </div>
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
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
                        <td>
                            <a href="editar_catastro.php?id=<?php echo $fila['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="eliminar_catastro.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este catastro?')">Eliminar</a>
                            <a href="../../cuatro/verificaImpuestoJava.php?codCatastro=<?php echo $fila['id']; ?>&rol=<?php echo $rol; ?>" class="btn btn-warning btn-sm">IMPUESTO Java</a>
                            <a href="../../cinco/verificaImpuestoCs.php?codCatastro=<?php echo $fila['id']; ?>&rol=<?php echo $rol; ?>" class="btn btn-info btn-sm">IMPUESTO Cs</a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php include "../../uno/footer.php" ?>
</body>
</html>
