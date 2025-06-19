<div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
  <div class="card login-card shadow-lg p-4">
    <div class="card-header bg-amarillo text-center">
      <h2 class="mb-0">Iniciar Sesión</h2>
    </div>
    <form method="post" action="">
      <div class="card-body">
        <div class="mb-3">
          <label for="correo" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="correo" name="correo" required placeholder="nombre@ejemplo.com">
          <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" required placeholder="Contraseña">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success px-4">Iniciar Sesión</button>
        </div>
      </div>
    </form>
  </div>
</div>
