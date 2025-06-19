<div  class="container-fluid" >
<div class="container mt-1 mb-1 d-flex justify-content-center">
  <div class="card" style="width: 50%;">
    <div class="card-header text-center">
      <!-- titulo del formulario-->
      <h2>Registrar usuario</h2>
    </div>
    <form method="post" action="">
      <div class="card-body" media="(max-width:768px)">
        <div class="mb-2">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="nombre" type="text" class="form-control" placeholder="Nombre" required placeholder="Nombre">
        </div>
        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control"  placeholder="Apellido" required placeholder="Apellido">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input name="email" type="email" class="form-control"  placeholder="nombre@ejemplo.com" required placeholder="nombre@ejemplo.com">
        </div>
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" name="usuario"  class="form-control" placeholder="Usuario" required placeholder="Usuario">
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label">Contraseña</label>
          <input name="pass" type="password" class="form-control" placeholder="Contraseña (mínimo 8 carácteres)" required placeholder="Contraseña (mínimo 8 carácteres)">
        </div>
        <input type="submit" value="Crear Usuario" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
</div>