<?= $this->extend('layouts/auth') ?>
<?= $this->section('content') ?>

<div class="auth-card card">
    <h1>Recuperar contraseña</h1>
    <form action="<?= site_url('forgot-password') ?>" method="post">
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="mail@ejemplo.com">
        </div>
        <button type="submit" class="btn-primary">Enviar enlace</button>
    </form>
</div>

<?= $this->endSection() ?>
