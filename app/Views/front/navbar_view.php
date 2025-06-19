<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>
<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/');?>">
      <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Logo de la pyme" class="logo" width="120" height="120">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-sm" style="background-color:#e2a42d; color:white; border:none; border-radius:20px; padding:6px 12px; font-weight:bold; font-size:0.9rem;">
    <a class="text-white text-decoration-none" href="#">ADMIN: <?= esc($nombre); ?></a>
     </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('registro'); ?>>Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('login'); ?>>Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('/logout'); ?>"><i type="button" class="btn btn-outline-danger me-md-2">Cerrar sesión</i></a>
          </li>
        </ul>
      </div>

    <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href=<?php echo base_url('/'); ?>>Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('quienes_somos'); ?>>¿Quiénes Somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('acerca_de'); ?>href=>Acerca De...</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('/logout'); ?>"><i type="button" class="btn btn-outline-danger me-md-2">Cerrar sesión</i></a>
          </li>
        </ul>
      </div>

    <?php else: ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href=<?php echo base_url('/'); ?>>Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('quienes_somos'); ?>>¿Quiénes Somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('acerca_de'); ?>>Acerca De...</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('registro'); ?>>Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('login'); ?>>Iniciar Sesión</a>
          </li>
        </ul>
        <form class="d-flex ms-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-buscar" type="submit">Buscar</button>
        </form>
      </div>
    <?php endif; ?>
  </div>
</nav>
