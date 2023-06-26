<head>
    <link rel="stylesheet" href="<?= base_url("css/misPropiedades.css") ?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<div class="container-masinfo-titulo">
    <section class="section-masinfo-titulo">
        <div class="masinfo-titulo">
            <h3 class="titulo-inicial ">Mis Propiedades</h3>
            <p class="text-titulo">Configura tus compras o alquileres </p>
        </div>
    </section>
</div>
<section class="mispropiedades-section spad" >
    <section class="section-barra-lateral">
        <div class="enlaces">
            <a value="MisPropiedades" class="active"><i class='bx bx-home-alt-2'></i>&nbsp Mis Propiedades Subidas</a>
            <a value="PropiedadesCompradas"><i class='bx bx-money-withdraw'></i>&nbsp Viviendas Compradas</a>
            <a value="PropiedadesAlquiladas"><i class='bx bx-select-multiple'></i>&nbsp Viviendas Alquiladas</a>
        </div>
    </section>
    <section class="section-view" id="section-view"></section>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script>

    function mostrarVivienda(rowVivienda, zona, tipo) {
        let viviendaHTML = `
            <div class="container-propiedad">
                <div class="imagen-mispropiedades" style="background-image: url('img/viviendas/${rowVivienda.imagen}');"></div>
                <div class="container-textos">
                    <div class="container-titulo">
                        <h1 class="h1-propiedades">${zona.find(z => z.id === rowVivienda.zona).zona}</h1>
                        <p class="p-propiedades">${rowVivienda.direccion}</p>
                    </div>
                    <div class="container-propiedades">
                        <p><i class='bx bx-shape-square'></i>&nbsp ${rowVivienda.metros_cuadrados} m²</p>
                        <p><i class='bx bx-hotel' ></i>&nbsp ${rowVivienda.num_habitaciones}</p>
                        <p><i class='bx bx-phone'></i>&nbsp ${rowVivienda.telefono}</p>
                        <p><i class='bx bxs-car-garage'></i>&nbsp ${rowVivienda.num_garajes}</p>
                        <p><i class='bx bx-bath'></i>&nbsp ${rowVivienda.num_baños}</p>
                        <p><i class='bx bx-file'></i>&nbsp ${rowVivienda.certificado_energetico}</p>
                    </div>
                    <div class="container-precios">
                        ${rowVivienda.precio_venta != 0 && rowVivienda.precio_venta != null && (tipo == 3) ? 
                            `<p><i class='bx bx-euro' ></i>&nbsp ${(parseFloat(rowVivienda.precio_venta)).toLocaleString('es-ES', { minimumFractionDigits: 2, maximumFractionDigits: 2, useGrouping: true, groupingSeparator: ',' })}</p>` 
                        : ''}
                        ${rowVivienda.precio_alquiler != 0 && rowVivienda.precio_alquiler != null  && (tipo == 3) ? 
                            `<p> <i class='bx bx-euro' ></i>&nbsp ${(parseFloat(rowVivienda.precio_alquiler)).toLocaleString('es-ES', { minimumFractionDigits: 2, maximumFractionDigits: 2, useGrouping: true, groupingSeparator: ',' })}/mes</p>` 
                        : ''}
                    </div>
                </div>
                ${tipo == 3 ?
                    `<div class="container-botones">
                        <form id="eliminarForm" method="POST" action="<?= base_url('eliminar') ?>">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" value="${rowVivienda.id}">
                            <button type="submit" id="btn-eliminar" class="btn-eliminar">Eliminar</button>
                        </form>

                        <form method="POST" action="<?= base_url('editar') ?>">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" value="${rowVivienda.id}">
                            <button type="submit" class="btn-modificar">Editar</button>
                        </form>
                    </div>`
                : ''}
            </div>`;

        document.getElementById("section-view").innerHTML += viviendaHTML;
    }

    function buscarViviendas(viviendas, zona, tipo, transacciones = null) {
        document.getElementById("section-view").innerHTML = '';
        let cont = 0;
        if (viviendas.length > 0) {
            if(tipo == 3) {
                viviendas.forEach(function (rowVivienda) {
                    if (rowVivienda.disponible == 1) {
                        mostrarVivienda(rowVivienda, zona, tipo);
                        cont++;
                    }
                });
                if(cont == 0)
                    document.getElementById("section-view").innerHTML = '';
            }
            else {
                viviendas.forEach(function (rowVivienda) {
                    mostrarVivienda(rowVivienda, zona, tipo);
                });
            }
        } else {
            document.getElementById("section-view").innerHTML = '';
        }
    }

    document.getElementById("section-view").addEventListener("click", function(event) {
        if (event.target.classList.contains("btn-eliminar")) {
            event.preventDefault();

            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Quieres eliminar esta vivienda?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d48d08',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'No, cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Vivienda eliminada',
                        '',
                        'success'
                    ).then(() => {
                        const form = event.target.closest("form");
                        form.submit();
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Eliminación cancelada',
                        '',
                        'error'
                    );
                }
            });
        }
    });

    $(document).ready(function() {
        $(".enlaces a").click(function(e) {
            e.preventDefault();
            $(".enlaces a").removeClass('active');
            $(this).addClass('active');

            var value = $(this).attr('value');
            var url;
            
            switch(value) {
                case 'MisPropiedades':
                    url = "<?php echo base_url('buscarPropiedadesUsuario'); ?>";
                    break;
                case 'PropiedadesCompradas':
                    url = "<?php echo base_url('buscarPropiedadesCompradas'); ?>";
                    break;
                case 'PropiedadesAlquiladas':
                    url = "<?php echo base_url('buscarPropiedadesAlquiladas'); ?>";
                    break;
            }

            $.ajax({
                url: url,
                method: "GET",
                success: function(response) {
                    let jsonResponse = JSON.parse(response);
                    var zona = <?php echo json_encode($zona); ?>;
                    if (jsonResponse.tipo == 3)
                        buscarViviendas(jsonResponse.data, zona, jsonResponse.tipo);
                    else
                        buscarViviendas(jsonResponse.data, zona, jsonResponse.tipo);
                    
                    console.log(jsonResponse.data);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                },
            });
        });

        $('a[value="MisPropiedades"]').trigger('click');
    });
</script>

<script src="<?= base_url("js/misPropiedades.js") ?>"></script>