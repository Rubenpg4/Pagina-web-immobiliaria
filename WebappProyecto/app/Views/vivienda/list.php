<link rel="stylesheet" href="<?= base_url("css/user_ok.css") ?>">
<h2 class="alert alert-warning">Acceso en list -> Tu rol es 2</h2>
<section class="lista_admin spad">

<h1>Vivienda list</h1>

<?php if (sizeof($viviendas) > 0):?>
<?php foreach ($viviendas as $row):?>
    <div class="col-md-4 mb-3 normal">
        <?php
        echo $row->id . " - ";
        echo $row->disponible . " - ";
        echo $row->direccion . " ";
        echo $row->fecha . " - ";
        echo $row->metros_cuadrados . " - ";
        echo $row->num_habitaciones . " - ";
        echo $row->num_baños . " ";
        echo $row->num_garajes . " - ";
        echo $row->precio_venta . " - ";
        echo $row->precio_alquiler . " - ";
        echo $row->telefono . " - ";
        echo $row->certificado_energetico . " - ";
        echo $row->novedades . " - ";
        echo $row->ofertas . " - ";
        echo "<br/>";
        ?>
</div>
<?php endforeach; ?>
<?php else: ?>
    <p>No users</p>
<?php endif; ?>
<script src="<?= base_url("js/user_ok.js")?>"></script>