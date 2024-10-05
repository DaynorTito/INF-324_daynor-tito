<div class="container mt-5 mb-5" style="min-height: calc(70vh - 70px);">
        <header>
            <h1 class="text-center">Gestión de Personas</h1>
            <h1 class="text-center mb-4">Lista de Personas</h1>
        </header>
        <div class="mb-3 text-right">
            <a href="../../seis/consultaImpuestos.php" class="btn btn-warning">LISTADO PERSONAS IMPUESTO SQL</a>
        </div>
        <main>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">CI</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Paterno</th>
                        <th scope="col">Materno</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($fila = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>{$fila['ci']}</td>";
                        echo "<td>{$fila['nombre']}</td>";
                        echo "<td>{$fila['paterno']}</td>";
                        echo "<td>{$fila['materno']}</td>";
                        echo "<td>{$fila['direccion']}</td>";
                        echo "<td>{$fila['rol']}</td>";
                        echo "<td>";
                        echo "<a class='btn btn-success' href='editar.php?ci={$fila['ci']}' >Editar</a> ";
                        echo "<a class='btn btn-danger' href='eliminar.php?ci={$fila['ci']}' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este catastro?\")'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center">
                <a class="btn btn-primary" href='nuevo.php'>Nuevo</a>
                
                <a class="btn btn-danger" href='../index.php?rol=admin'>Salir de personas</a>
            </div>
        </main>
    </div>