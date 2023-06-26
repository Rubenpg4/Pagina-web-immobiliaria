<head>
    <link rel="stylesheet" href="<?= base_url("css/altaVivienda.css") ?>">
</head>

<div class="container-altavivienda-titulo">
    <section class="section-altavivienda-titulo">
        <div class="altavivienda-titulo">
            <h3 class="titulo-inicial ">Alta de viviendas</h3>
        </div>
    </section>
</div>

<section class="altavivienda-section spad" >
    <section class="form-vivienda-section spad">
	<form method="post" action=<?= base_url('/subirVivienda');?> enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="input-container">
        <i class='bx bx-shape-square'></i>
		<label for="metros_cuadrados">Metros cuadrados:</label>
		<input class="input2" type="number" name="metros_cuadrados" min="0" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-hotel'></i>
        <label for="num_habitaciones">Número de habitaciones:</label>
        <input class="input2" type="number" name="num_habitaciones" min="0" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-bath'></i>
        <label for="num_banos">Número de baños:</label>
        <input class="input2" type="number" name="num_banos" min="0" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bxs-car-garage'></i>
        <label for="num_garajes">Número de garajes:</label>
        <input class="input2" type="number" name="num_garages" min="0" any required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-euro' ></i>
		<label for="precio_venta">Precio de venta:</label>
		<input class="input2" type="number" name="precio_venta" min="0"><br>
    </div>
    <div class="input-container">
        <i class='bx bx-euro' ></i>
		<label for="precio_alquiler">Precio de alquiler:</label>
		<input class="input2" type="number" name="precio_alquiler" min="0" any><br>
    </div>
    <div class="input-container">
        <i class='bx bx-phone'></i>
		<label for="telefono">Teléfono:</label>
		<input class="input2" type="tel" name="telefono" min="0" pattern="[0-9]{9}" required><br>
    </div>
    <div class="input-container">
        <i class='bx bx-file'></i>
        <label for="certificado_energetico">Certificado energético:</label>
        <select class="select2" name="certificado_energetico" required>
            <option value="" selected disabled>Selecciona</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
        </select>
        <br>
    </div>
    <div class="input-container">
        <i class='bx bx-building'></i>
        <label for="zona">Zona:</label>
        <select class="select2" name="zona" required>
            <option value="" selected disabled>Selecciona</option>
            <option value="1">Alcantarilla</option>
            <option value="13">Avda.Andalucía</option>
            <option value="2">Avda. Madrid</option>
            <option value="3">Bulevar</option>
            <option value="4">Catedral</option>
            <option value="5">Estacion</option>
            <option value="6">Fuentezuelas</option>
            <option value="14">Jabalcuz</option>
            <option value="7">Hospital</option>
            <option value="16">La Magdalena</option>
            <option value="8">Peñamefecit</option>
            <option value="15">Puente Jontoya</option>
            <option value="9">San Bartolome</option>
            <option value="10">San Ildefonso</option>
            <option value="11">San Roque</option>
            <option value="12">Universidad</option>
        </select>
        <br>
    </div>
    <div class="input-container">
        <i class='bx bx-map'></i>
		<label for="direccion">Dirección:</label>
		<input class="input2" type="text" name="direccion" required><br>
    </div>
    <div class="input-container">
		<label for="imagen">Imagen:</label>
		<input class="btn btn-primary2" type="file" name="imagen" id="imagen" accept=".jpg, .jpeg, .png" required><br>
    </div>
    <div class="boton">
		<input class="btn btn-primary2" type="submit" value="Agregar vivienda">
    </div>
	</form>
    </section>
</section>
<script src="<?= base_url("js/upload.js")?>"></script>