<?php
$rol = isset($_GET['rol']) ? $_GET['rol'] : '';
$ci = isset($_GET['ci']) ? $_GET['ci'] : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .btn-large {
            width: 200px;
            height: 70px;
            font-size: 20px;
        }
        .centered {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
        }
        
    </style>
</head>
<body>
    <?php include "navBar.php" ?>
    
    <div class="centered mt-2 content">
        <?php if ($rol === 'admin'): ?>
            <h1>Hola Admin</h1>
            <div>
                <h3>Administrar:</h3>
                <a href="persona/index.php" class="btn btn-info btn-large">Administrar Usuario</a>
                <a href="catastro/index.php?rol=admin" class="btn btn-success btn-large">Administrar Catastro</a>
            </div>
        <?php elseif ($rol === 'funcionario'): ?>
            <h1>Hola Funcionario</h1>
            <a href="catastro/index.php?rol=funcionario" class="btn btn-success btn-large">Administrar Catastro</a>
        <?php elseif ($rol === 'duenio'): ?>
            <?php header("Location: duenio.php?ci=$ci"); ?>
        <?php else: ?>
            <h1>Rol no reconocido</h1>
        <?php endif; ?>
    </div>
    
    <?php include "../uno/footer.php" ?>
    

</body>
</html>
