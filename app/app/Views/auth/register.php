<?= $this->extend('layouts/auth') ?>
<?= $this->section('content') ?>

<div class="auth-card card">
    <h1>Registrarse</h1>
    <form action="<?= site_url('register') ?>" method="post">
        <div class="form-group">
            <label for="name">Nombre completo</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Tu nombre completo">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="mail@ejemplo.com">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Tu contraseña">
        </div>
        <button type="submit" class="btn-primary">Crear cuenta</button>
    </form>
</div>

<?= $this->endSection() ?>
