<div class="container mt-5 d-flex justify-content-center">
  <div class="card shadow-lg p-4" style="max-width: 1000px; width: 100%;">

    <h2 class="text-center mb-4">Registro de Usuario</h2>
    <form action="../../dos/registro.php" method="POST">
      <div class="form-group">
        <label for="ci">CI</label>
        <input type="text" name="ci" class="form-control" id="ci" placeholder="Introduce tu número de CI" required>
      </div>

      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduce tu nombre" required>
      </div>

      <div class="form-group">
        <label for="paterno">Apellido Paterno</label>
        <input type="text" name="paterno" class="form-control" id="paterno" placeholder="Introduce tu apellido paterno" required>
      </div>

      <div class="form-group">
        <label for="materno">Apellido Materno (opcional)</label>
        <input type="text" name="materno" class="form-control" id="materno" placeholder="Introduce tu apellido materno">
      </div>

      <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Introduce tu dirección" required>
      </div>

      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Introduce tu contraseña" required>
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-user-plus"></i> Registrar
        </button>
        <button type="reset" class="btn btn-secondary">
          <i class="fas fa-eraser"></i> Limpiar
        </button>
      </div>
    </form>

    <div class="mt-3 text-center">
      <p class="text-muted">¿Ya tienes una cuenta? <a href="login.php" class="text-primary">Inicia sesión aquí</a></p>
    </div>
  </div>
</div>
