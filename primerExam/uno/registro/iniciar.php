<div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh; padding-top: 20px; padding-bottom: 20px;">
  <div class="row w-100">
    <div class="col-md-6 d-flex justify-content-center">
      <img src="../assets/login.jpg" alt="Descripción de la imagen" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>
    
    <div class="col-md-6">
      <div class="card shadow-lg p-5">
        <h2 class="text-center mb-4">Iniciar Sesión</h2>
        
        <form action="../../dos/inicioSecionUser.php" method="post">
          <div class="form-group">
              <label for="username">CI del Usuario</label>
              <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Introduce tu numero de carnet CI" required>
              </div>
          </div>

          <div class="form-group">
              <label for="password">Contraseña</label>
              <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" required>
              </div>
          </div>

          <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Acceder</button>
              <button type="reset" class="btn btn-secondary"><i class="fas fa-eraser"></i> Limpiar</button>
          </div>
      </form>

        <div class="mt-3 text-center color-prymary">
          <a href="registro.php" class="text-muted">¿Aún no te registraste?</a>
        </div>
      </div>
    </div>
  </div>
</div>
