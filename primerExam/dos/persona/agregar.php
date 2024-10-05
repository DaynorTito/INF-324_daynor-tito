<div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
            <h2 class="text-center mb-4">Agregar Persona</h2>
            <form action="insertar.php" method="post">
                <div class="form-group">
                    <label for="ci">CI:</label>
                    <input type="text" class="form-control" name="ci" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="paterno">Apellido Paterno:</label>
                    <input type="text" class="form-control" name="paterno" required>
                </div>
                <div class="form-group">
                    <label for="materno">Apellido Materno:</label>
                    <input type="text" class="form-control" name="materno">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" required>
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" class="form-control" name="contrasena" required>
                </div>
                <div class="form-group">
                    <label for="rol">Rol:</label>
                    <select class="form-control" name="rol">
                        <option value="duenio">Dueño</option>
                        <option value="funcionario">Funcionario</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cancelar</button>
             </form>
        </div>
    </div>