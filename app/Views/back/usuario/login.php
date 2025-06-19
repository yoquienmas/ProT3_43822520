<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
  <div class="card login-card shadow-lg p-4">
    <div class="card-header bg-amarillo text-center">
      <h2 class="mb-0">Iniciar Sesión</h2>
    </div>
    <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg')?>
                    </div>
    <?php endif;?>
    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
      <div class="card-body">
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com">
        </div>
        <div class="mb-4">
          <label for="pass" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success px-4" value="Ingresar">Iniciar Sesión</button>
          <!--<a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>-->
         <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>" class="mi-enlace">Registrarse aquí</a></span>
        </div>
      </div>
    </form>
  </div>
</div>