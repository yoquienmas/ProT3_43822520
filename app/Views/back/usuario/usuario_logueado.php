<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="width: 22rem;">
        
        <!-- Mensaje Flash -->
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning text-center">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <!-- Imagen según perfil -->
        <div class="text-center mb-3">
            <?php if(session()->perfil_id == 1): ?>
                <img src="<?= base_url('assets/img/admin.jpg'); ?>" class="rounded-circle" width="120" height="100" alt="Admin">

                <h5 class="mt-2">Administrador</h5>
            <?php elseif(session()->perfil_id == 2): ?>
                <img src="<?= base_url('assets/img/cliente.png'); ?>" class="rounded-circle" width="120" height="100" alt="Cliente">
                <h5 class="mt-2">Cliente</h5>
            <?php endif; ?>
        </div>

    </div>
</div>
