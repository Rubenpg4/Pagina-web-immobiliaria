<h2 class="alert alert-danger">Acceso Denegado</h2>
<p>No tienes rol de administrador(2) o de usuario normal(1) </p>

<?php if (isset($error)): ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>