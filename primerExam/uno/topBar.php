<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-4">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand d-flex align-items-center" href="#">
    <img src="/primerExam/uno/assets/main_logo.png" width="80" height="80" class="d-inline-block align-top" alt="Logo">
    <h3 class="ml-2">Catastro La Paz</h3>
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="/primerExam/uno/index.php"><i class="fas fa-home"></i> Inicio <span
            class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'servicio.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="/primerExam/uno/servicios/servicio.php"><i class="fas fa-concierge-bell"></i> Servicios</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'tramite.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="/primerExam/uno/tramites/tramite.php"><i class="fas fa-box"></i> Tramites</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'nosotros.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="/primerExam/uno/nosotros/nosotros.php"><i class="fas fa-users"></i> Nosotros</a>
      </li>
      <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
        <a class="nav-link" href="/primerExam/uno/registro/login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
      </li>
    </ul>

    <form class="form-inline my-3 my-lg-0">
      <a href="/primerExam/uno/registro/registro.php" class="btn btn-outline-light my-2 my-sm-0">
        <i class="fas fa-user-plus"></i> Registrarse
      </a>
    </form>
  </div>
</nav>