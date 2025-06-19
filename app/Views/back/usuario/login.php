<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center"> 
  <div class="card login-card shadow-lg p-4">
    <div class="card-header bg-amarillo text-center">
      <h2 class="mb-0">Iniciar Sesión</h2>
    </div>

    <!-- Mensaje de éxito (por ejemplo, "Usuario registrado con éxito") -->
    <?php if(session()->getFlashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <!-- Mensaje de error (por ejemplo, "Contraseña incorrecta") -->
    <?php if(session()->getFlashdata('msg')): ?>
      <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
        <?= session()->getFlashdata('msg') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
      <div class="card-body">
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
        </div>
        <div class="mb-4">
          <label for="pass" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success px-4">Iniciar Sesión</button>
          <!--<a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>-->
          <br>
          <span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>" class="mi-enlace fw-bold text-decoration-underline">Registrarse aquí</a></span>
        </div>
      </div>
    </form>
  </div>
</div>
