<?php 
include "../dos/conexion.php";



$query1 = "
    SELECT * FROM (
        SELECT 
            p.nombre, 
            p.paterno,
            p.materno,
            COUNT(CASE WHEN c.id LIKE '1%' THEN 1 END) AS nivel_alto,
            COUNT(CASE WHEN c.id LIKE '2%' THEN 1 END) AS nivel_medio,
            COUNT(CASE WHEN c.id LIKE '3%' THEN 1 END) AS nivel_bajo
        FROM persona p
        LEFT JOIN catastro c ON p.ci = c.ciDuenio
        GROUP BY p.nombre, p.paterno, p.materno

        UNION ALL

        SELECT 
            'TOTAL' AS nombre,
            '' AS paterno,
            '' AS materno,
            SUM(nivel_alto) AS nivel_alto,
            SUM(nivel_medio) AS nivel_medio,
            SUM(nivel_bajo) AS nivel_bajo
        FROM (
            SELECT 
                COUNT(CASE WHEN c.id LIKE '1%' THEN 1 END) AS nivel_alto,
                COUNT(CASE WHEN c.id LIKE '2%' THEN 1 END) AS nivel_medio,
                COUNT(CASE WHEN c.id LIKE '3%' THEN 1 END) AS nivel_bajo
            FROM persona p
            LEFT JOIN catastro c ON p.ci = c.ciDuenio
            GROUP BY p.ci
        ) AS subtotales
    ) AS personas_impuestos;
";

$result1 = mysqli_query($conn, $query1);

// Consulta 2
$query2 = "
    SELECT 
        CASE 
            WHEN c.id LIKE '1%' THEN 'Alto'
            WHEN c.id LIKE '2%' THEN 'Medio'
            WHEN c.id LIKE '3%' THEN 'Bajo'
            ELSE 'No Clasificado'
        END AS Tipo_Impuesto,
        COUNT(DISTINCT p.ci) AS Total_Personas
    FROM persona p
    LEFT JOIN catastro c ON p.ci = c.ciDuenio
    GROUP BY Tipo_Impuesto

    UNION ALL

    SELECT 
        'TOTAL' AS Tipo_Impuesto,
        COUNT(DISTINCT p.ci) AS Total_Personas
    FROM persona p
    LEFT JOIN catastro c ON p.ci = c.ciDuenio
    WHERE c.id IS NOT NULL;
";

$result2 = mysqli_query($conn, $query2);
?>

    <div class="container mt-5">
    <h2 class="text-center mb-4">Consulta de Impuestos</h2>
    <div class="text-end mb-3">
    <button id="toggleButton" class="btn btn-warning" onclick="window.location.href='../dos/persona/index.php?rol=admin'">Regresar</button>
    </div>

    <div id="table1" class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Nivel Alto</th>
                    <th>Nivel Medio</th>
                    <th>Nivel Bajo</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result1)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($row['paterno']); ?></td>
                        <td><?php echo htmlspecialchars($row['materno']); ?></td>
                        <td><?php echo htmlspecialchars($row['nivel_alto']); ?></td>
                        <td><?php echo htmlspecialchars($row['nivel_medio']); ?></td>
                        <td><?php echo htmlspecialchars($row['nivel_bajo']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div> </br>
    <h2>Tabla anterior vista por columas y filas invertidas sin nombres</h2> </br>
    <div id="table2" class="table-responsive hidden">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>Tipo de Impuesto</th>
                    <th>Total Personas</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result2)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['Tipo_Impuesto']); ?></td>
                        <td><?php echo htmlspecialchars($row['Total_Personas']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
