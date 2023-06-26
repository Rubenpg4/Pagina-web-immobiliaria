<head>
    <link rel="stylesheet" href="<?= base_url("css/altaVivienda.css") ?>">
</head>

<div class="container-altavivienda-titulo">
    <section class="section-altavivienda-titulo">
        <div class="altavivienda-titulo">
            <h3 class="titulo-inicial ">Editar Vivienda</h3>
        </div>
    </section>
</div>

<section class="altavivienda-section spad" >
    <section class="form-vivienda-section spad">
	<form method="post" action=<?= base_url('/editarVivienda');?> enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="input-container">
        <i class='bx bx-shape-square'></i>
		<label for="metros_cuadrados">Metros cuadrados:</label>
		<input class="input2" type="number" name="metros_cuadrados" min="0" value="<?= $vivienda->metros_cuadrados ?>" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-hotel'></i>
        <label for="num_habitaciones">Número de habitaciones:</label>
        <input class="input2" type="number" name="num_habitaciones" min="0" value="<?= $vivienda->num_habitaciones ?>" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-bath'></i>
        <label for="num_banos">Número de baños:</label>
        <input class="input2" type="number" name="num_banos" min="0" value="<?= $vivienda->num_baños ?>" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bxs-car-garage'></i>
        <label for="num_garajes">Número de garajes:</label>
        <input class="input2" type="number" name="num_garages" min="0" value="<?= $vivienda->num_garajes ?>" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-euro' ></i>
		<label for="precio_venta">Precio de venta:</label>
		<input class="input2" type="number" name="precio_venta" value="<?= $vivienda->precio_venta ?>" min="0"><br>
    </div>
    <div class="input-container">
        <i class='bx bx-euro' ></i>
		<label for="precio_alquiler">Precio de alquiler:</label>
		<input class="input2" type="number" name="precio_alquiler" value="<?= $vivienda->precio_alquiler ?>" min="0" any><br>
    </div>
    <div class="input-container">
        <i class='bx bx-phone'></i>
		<label for="telefono">Teléfono:</label>
		<input class="input2" type="tel" name="telefono" min="0" value="<?= $vivienda->telefono ?>" pattern="[0-9]{9}" required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-file'></i>
        <label for="certificado_energetico">Certificado energético:</label>
        <select class="select2" name="certificado_energetico" required>
            <option value="A" <?php if ($vivienda->certificado_energetico === 'A') echo 'selected'; ?>>A</option>
            <option value="B" <?php if ($vivienda->certificado_energetico === 'B') echo 'selected'; ?>>B</option>
            <option value="C" <?php if ($vivienda->certificado_energetico === 'C') echo 'selected'; ?>>C</option>
            <option value="D" <?php if ($vivienda->certificado_energetico === 'D') echo 'selected'; ?>>D</option>
            <option value="E" <?php if ($vivienda->certificado_energetico === 'E') echo 'selected'; ?>>E</option>
            <option value="F" <?php if ($vivienda->certificado_energetico === 'F') echo 'selected'; ?>>F</option>
            <option value="G" <?php if ($vivienda->certificado_energetico === 'G') echo 'selected'; ?>>G</option>
        </select>
        <br>
    </div>
    <div class="input-container">
        <i class='bx bx-building'></i>
        <label for="zona">Zona:</label>
        <select class="select2" name="zona" required>
            <option value="1" <?php if ($vivienda->zona === '1') echo 'selected'; ?>>Alcantarilla</option>
            <option value="13" <?php if ($vivienda->zona === '13') echo 'selected'; ?>>Avda.Andalucía</option>
            <option value="2" <?php if ($vivienda->zona === '2') echo 'selected'; ?>>Avda. Madrid</option>
            <option value="3" <?php if ($vivienda->zona === '3') echo 'selected'; ?>>Bulevar</option>
            <option value="4" <?php if ($vivienda->zona === '4') echo 'selected'; ?>>Catedral</option>
            <option value="5" <?php if ($vivienda->zona === '5') echo 'selected'; ?>>Estacion</option>
            <option value="6" <?php if ($vivienda->zona === '6') echo 'selected'; ?>>Fuentezuelas</option>
            <option value="14" <?php if ($vivienda->zona === '14') echo 'selected'; ?>>Jabalcuz</option>
            <option value="7" <?php if ($vivienda->zona === '7') echo 'selected'; ?>>Hospital</option>
            <option value="16" <?php if ($vivienda->zona === '16') echo 'selected'; ?>>La Magdalena</option>
            <option value="8" <?php if ($vivienda->zona === '8') echo 'selected'; ?>>Peñamefecit</option>
            <option value="15" <?php if ($vivienda->zona === '15') echo 'selected'; ?>>Puente Jontoya</option>
            <option value="9" <?php if ($vivienda->zona === '9') echo 'selected'; ?>>San Bartolome</option>
            <option value="10" <?php if ($vivienda->zona === '10') echo 'selected'; ?>>San Ildefonso</option>
            <option value="11" <?php if ($vivienda->zona === '11') echo 'selected'; ?>>San Roque</option>
            <option value="12" <?php if ($vivienda->zona === '12') echo 'selected'; ?>>Universidad</option>
        </select>
        <br>
    </div>
    <div class="input-container">
        <i class='bx bx-map'></i>
		<label for="direccion">Dirección:</label>
		<input class="input2" type="text" name="direccion" value="<?= $vivienda->direccion ?>" required><br>
    </div>
    <div class="input-container">
		<label for="imagen">Imagen:</label>
		<input class="btn btn-primary2" type="file" name="imagen" id="imagen" accept=".jpg, .jpeg, .png" value="<?= $vivienda->imagen ?>"><br>
    </div>
    <div class="boton">
		<input class="btn btn-primary2" type="submit" value="Editar vivienda">
    </div>
    <input type="hidden" name="id" value="<?= $vivienda->id ?>">
	</form>
    </section>
</section>
<script src="<?= base_url("js/upload.js")?>"></script>