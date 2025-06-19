<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal');?>">
      <img src="assets/img/logo.png" alt="Logo de la pyme" class="logo" width="120" height="120">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href='principal'>Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>¿Quiénes Somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='acerca_de'>Acerca De...</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='registro'>Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='login'>Iniciar Sesión</a>
        </li>
      </ul>
      <form class="d-flex ms-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-buscar" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
