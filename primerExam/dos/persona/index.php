<?php 
include "../conexion.php";

$sql = "SELECT * FROM persona";
$resultado = mysqli_query($conn, $sql);

?>
<html>
<head>
    <title>Gestión de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "../navBar.php" ?>
    <?php include "mostrar.php" ?>
    <?php include "../../uno/footer.php" ?>
</body>
</html>
