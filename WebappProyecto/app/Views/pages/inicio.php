<head>
    <link rel="stylesheet" href="<?= base_url("css/inicio.css") ?>">
    <link rel="stylesheet" href="<?= base_url("css/vivienda.css") ?>">
    <link rel="bootstrap" href="<?= base_url("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css") ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stickybits/3.7.6/stickybits.min.js"></script>
</head>

<div class="container-inicio-titulo">
    <section class="section-inicio-titulo ">
        <div class="box-inicio animate-from-bottom">
            <h3 class="titulo-inicial animate-from-bottom">El hogar solo lo eliges tú</h3>
            <div class="search-bar animate-from-bottom">
                    <div class="select-wrapper">
                        <select class="boton-buscar btn2" id="selectZona" name="selectZona">
                            <option value="" selected>Cualquier Zona</option>
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
                            <option value="13">Avda.Andalucía</option>
                            <option value="14">Jabalcuz</option>
                            <option value="15">Puente Jontoya</option>
                            <option value="16">La Magdalena</option>
                        </select>
                    </div>
                    <div class="contenedor-botones">
                        <input type="hidden" name="opcionSeleccionada" id="opcionSeleccionada" value="ambos">
                        <button class="boton-alquilar btn2 activo" type="button" name="boton-activo" value="ambos" id="boton-no-submit">Ambos</button>
                        <button class="boton-alquilar btn2" type="button" name="boton-inactivo" value="comprar" id="boton-no-submit">Comprar</button>
                        <button class="boton-alquilar btn2" type="button" name="boton-inactivo" value="alquilar" id="boton-no-submit">Alquilar</button>
                    </div>
                    <div class="contenedor-buscar">
                        <button type="button" class="boton-buscar btn2 submitButton" id="submitButton">Buscar</button>
                    </div>
            </div>
        </div>
    </section>
</div>

<section class="feature-section spad">
<button class="filter-toggle sticky-top">Mostrar filtro</button>

<div class="container-33 col-sm-4 sticky-top" id="container-33"> 
    <div class="sticky-top">
        <div class="container-body">
            <p class="parrafo"> Precio Compra </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minPrecioCompra" name="minPrecioCompra" placeholder="Min" step="2500" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxPrecioCompra" name="maxPrecioCompra" placeholder="Max" step="2500" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Precio Alquiler </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minPrecioAlquiler" name="minPrecioAlquiler" placeholder="Min" step="100" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxPrecioAlquiler" name="maxPrecioAlquiler" placeholder="Max" step="100" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Tamaño </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minTamano" name="minTamano" placeholder="Min" step="10" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxTamano" name="maxTamano" placeholder="Max" step="10" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Habitaciones </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minHabitaciones" name="minHabitaciones" placeholder="Min" step="1" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxHabitaciones" name="maxHabitaciones" placeholder="Max" step="1" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Baños </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minBanos" name="minBanos" placeholder="Min" step="1" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxBanos" name="maxBanos" placeholder="Max" step="1" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Garages </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minGarages" name="minGarages" placeholder="Min" step="1" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxGarages" name="maxGarages" placeholder="Max" step="1" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Certificado Energético </p>
            <div class="col">
                <select class="boton-buscar btn2" id="selectCertificado" name="selectCertificado">
                    <option value="" selected>Cualquier Certificado</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </div>
            <button type="button" class="boton-buscar btn2 submitButton" id="submitButton2">Actualizar</button>
        </div>
    </div>
</div>

<div class="container-66" id="container-66"></div>

<div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="modal-filter">
      <div class="container-body">
            <p class="parrafo"> Precio Compra </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minPrecioCompra_mobile" name="minPrecioCompra" placeholder="Min" step="2500" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxPrecioCompra_mobile" name="maxPrecioCompra" placeholder="Max" step="2500" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Precio Alquiler </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minPrecioAlquiler_mobile" name="minPrecioAlquiler" placeholder="Min" step="100" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxPrecioAlquiler_mobile" name="maxPrecioAlquiler" placeholder="Max" step="100" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Tamaño </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minTamano_mobile" name="minTamano" placeholder="Min" step="10" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxTamano_mobile" name="maxTamano" placeholder="Max" step="10" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Habitaciones </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minHabitaciones_mobile" name="minHabitaciones" placeholder="Min" step="1" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxHabitaciones_mobile" name="maxHabitaciones" placeholder="Max" step="1" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Baños </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minBanos_mobile" name="minBanos" placeholder="Min" step="1" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxBanos_mobile" name="maxBanos" placeholder="Max" step="1" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Garages </p>
            <div class="row">
                <div class="col">
                    <input class="input-filtro" type="number" id="minGarages_mobile" name="minGarages" placeholder="Min" step="1" min="0" any/>
                </div>
                <div class="col">
                    <input class="input-filtro" type="number" id="maxGarages_mobile" name="maxGarages" placeholder="Max" step="1" min="0" any/>
                </div>
            </div>
            <p class="parrafo"> Certificado Energético </p>
            <div class="col">
                <select class="boton-buscar btn2" id="selectCertificado_mobile" name="selectCertificado">
                    <option value="" selected>Cualquier Certificado</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                </select>
            </div>
            <button type="button" class="boton-buscar btn2 submitButton" id="submitButton3_mobile">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

</section>

<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script>

    window.onload = function() {
        var viviendas = <?php echo json_encode($viviendas); ?>;
        var zona = <?php echo json_encode($zona); ?>;
        var user = <?php echo json_encode($user); ?>;

        <?php $session = session(); ?>
        var logged = <?php echo $session->get('logged_in'); ?>

		buscarViviendas(viviendas, zona, user, logged);
	};

    function mostrarVivienda(rowVivienda, zona, user, logged) {
        const currentDate = new Date();
        const viviendaDate = new Date(rowVivienda.fecha);
        const diferenciaSegundos = (currentDate - viviendaDate) / 1000;
        const diferenciaDias = Math.round(diferenciaSegundos / (60 * 60 * 24));
        let dia = diferenciaDias === 1 ? 'día' : 'días';
        let viviendaHTML = `
            <div class="propiedades col-3 col-lg-4 col-sm-3">
                <div class="feature-item">
                    <div class="feature-pic set-bg" style="background-image: url('img/viviendas/${rowVivienda.imagen}');">
                        ${rowVivienda.precio_venta != 0 && rowVivienda.precio_venta != null  ? '<div class="sale-notic">VENTA</div>' : ''}
                        ${rowVivienda.precio_alquiler != 0 && rowVivienda.precio_alquiler != null ? '<div class="rent-notic">ALQUILER</div>' : ''}
                    </div>
                    <div class="feature-text">
                        <div class="text-center feature-title">
                            <h5>${zona.find(z => z.id === rowVivienda.zona).zona}</h5>
                            <p><i class='bx bx-map'></i>${rowVivienda.direccion}</p>
                        </div>
                        <div class="room-info-warp">
                            <div class="room-info">
                                <div class="rf-left">
                                    <p><i class='bx bx-shape-square'></i>${rowVivienda.metros_cuadrados} m²</p>
                                    <p><i class='bx bx-hotel' ></i> ${rowVivienda.num_habitaciones} Habitaciones</p>
                                    <p><i class='bx bx-phone'></i>${rowVivienda.telefono}</p>
                                </div>
                                <div class="rf-right">
                                    <p><i class='bx bxs-car-garage'></i> ${rowVivienda.num_garajes} Garages</p>
                                    <p><i class='bx bx-bath'></i> ${rowVivienda.num_baños} Baño</p>
                                    <p><i class='bx bx-file'></i>Cert. Energética ${rowVivienda.certificado_energetico}</p>
                                </div>
                            </div>
                            <div class="room-info">
                                <div class="rf-left">
                                    <p>
                                        <i class='bx bx-user' ></i>
                                        ${user.find(u => u.id === rowVivienda.propietario).nombre}
                                    </p>
                                </div>
                                <div class="rf-right">
                                    <p><i class="fa fa-clock-o"></i> Hace ${diferenciaDias} ${diferenciaDias === 1 ? 'día' : 'días'}</p>
                                </div>
                            </div>
                        </div>
                        <div class="room-prices">
                            ${rowVivienda.precio_venta != 0 && rowVivienda.precio_venta != null ? 
                                `<a class="room-price-rent btn3" onclick="comprarVivienda(${rowVivienda.id}, ${logged})">
                                    <span class="price-text"><i class='bx bx-euro' ></i>${(parseFloat(rowVivienda.precio_venta)).toLocaleString('es-ES', { minimumFractionDigits: 2, maximumFractionDigits: 2, useGrouping: true, groupingSeparator: ',' })}</span>
                                    <span class="action-text">Comprar</span>
                                </a>` 
                            : ''}
                            ${rowVivienda.precio_alquiler != 0 && rowVivienda.precio_alquiler != null ? 
                                `<a class="room-price-rent btn3" onclick="alquilarVivienda(${rowVivienda.id}, ${logged})">
                                    <span class="price-text"> <i class='bx bx-euro' ></i>${(parseFloat(rowVivienda.precio_alquiler)).toLocaleString('es-ES', { minimumFractionDigits: 2, maximumFractionDigits: 2, useGrouping: true, groupingSeparator: ',' })}/mes</span>
                                    <span class="action-text">Alquilar</span>
                                </a>` 
                            : ''}
                        </div>
                    </div>
                </div>
            </div>`;

        document.getElementById('container-66').innerHTML += viviendaHTML;
    }

    function buscarViviendas(viviendas, zona, user, logged) {
        document.getElementById('container-66').innerHTML = '';
        if (viviendas.length > 0) {
            viviendas.forEach(function (rowVivienda) {
                if (rowVivienda.disponible == 1) {
                    mostrarVivienda(rowVivienda, zona, user, logged);
                }
            });
        } else {
            document.getElementById('container-66').innerHTML = '<p>No hay viviendas actualmente</p>';
        }
    }


    document.querySelectorAll('.submitButton').forEach(button => {
        button.addEventListener('click', () => {
            let url = "<?php echo base_url('busquedadProcess'); ?>";
            // Obtén los valores de los inputs y selects
            let selectZona = $('#selectZona').val();
            let opcionSeleccionada = document.querySelector('.boton-alquilar.activo').value;

            let minPrecioCompra;
            let maxPrecioCompra;
            let minPrecioAlquiler;
            let maxPrecioAlquiler;
            let minTamano;
            let maxTamano;
            let minHabitaciones;
            let maxHabitaciones;
            let minBanos;
            let maxBanos;
            let minGarages;
            let maxGarages;
            let selectCertificado;

            if (button.id.endsWith("_mobile")) {
                minPrecioCompra = $('#minPrecioCompra_mobile').val();
                maxPrecioCompra = $('#maxPrecioCompra_mobile').val();
                minPrecioAlquiler = $('#minPrecioAlquiler_mobile').val();
                maxPrecioAlquiler = $('#maxPrecioAlquiler_mobile').val();
                minTamano = $('#minTamano_mobile').val();
                maxTamano = $('#maxTamano_mobile').val();
                minHabitaciones = $('#minHabitaciones_mobile').val();
                maxHabitaciones = $('#maxHabitaciones_mobile').val();
                minBanos = $('#minBanos_mobile').val();
                maxBanos = $('#maxBanos_mobile').val();
                minGarages = $('#minGarages_mobile').val();
                maxGarages = $('#maxGarages_mobile').val();
                selectCertificado = $('#selectCertificado_mobile').val();
            } else {
                minPrecioCompra = $('#minPrecioCompra').val();
                maxPrecioCompra = $('#maxPrecioCompra').val();
                minPrecioAlquiler = $('#minPrecioAlquiler').val();
                maxPrecioAlquiler = $('#maxPrecioAlquiler').val();
                minTamano = $('#minTamano').val();
                maxTamano = $('#maxTamano').val();
                minHabitaciones = $('#minHabitaciones').val();
                maxHabitaciones = $('#maxHabitaciones').val();
                minBanos = $('#minBanos').val();
                maxBanos = $('#maxBanos').val();
                minGarages = $('#minGarages').val();
                maxGarages = $('#maxGarages').val();
                selectCertificado = $('#selectCertificado').val();
            }

            // Prepara los datos a enviar
            let data = {
                selectZona: selectZona,
                opcionSeleccionada: opcionSeleccionada,
                minPrecioCompra: minPrecioCompra,
                maxPrecioCompra: maxPrecioCompra,
                minPrecioAlquiler: minPrecioAlquiler,
                maxPrecioAlquiler: maxPrecioAlquiler,
                minTamano: minTamano,
                maxTamano: maxTamano,
                minHabitaciones: minHabitaciones,
                maxHabitaciones: maxHabitaciones,
                minBanos: minBanos,
                maxBanos: maxBanos,
                minGarages: minGarages,
                maxGarages: maxGarages,
                selectCertificado: selectCertificado
            };

            $.ajax({
                url: url,
                method: "POST",
                data: data, 
                success: function(response) {
                    let jsonResponse = JSON.parse(response);
                    var zona = <?php echo json_encode($zona); ?>;
                    var user = <?php echo json_encode($user); ?>;
                    <?php $session = session(); ?>
                    var logged = <?php echo $session->get('logged_in'); ?>

                    buscarViviendas(jsonResponse.data, zona, user, <?php $logged ?>);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                },
            });
        });
    });
</script>

<script src="<?= base_url("js/inicio.js")?>"></script>
<script src="<?= base_url("js/vivienda.js")?>"></script>