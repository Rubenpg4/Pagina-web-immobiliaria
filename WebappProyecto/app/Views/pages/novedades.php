<head>
    <link rel="stylesheet" href="<?= base_url("css/novedades.css") ?>">
    <link rel="stylesheet" href="<?= base_url("css/vivienda.css") ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<div class="container-novedades-titulo">
    <section class="section-novedades-titulo">
        <div class="novedades-titulo">
            <h3 class="titulo-inicial animate-from-bottom">Lo más reciente en el mercado inmobiliario</h3>
            <p class="text-titulo animate-from-bottom-2">Las mejores y más innovadoras propiedades, solo en nuestra immobiliaria</p>
        </div>
    </section>
</div>
<section class="feature-section spad">

<?php function mostrarVivienda($rowVivienda, $zona, $user) { ?>
<?php 
$session = session();
$logged = $session->get('logged_in');
?>
        <div class="propiedades col-3 col-lg-4 col-sm-3" >
            <div class="feature-item">
                <div class="feature-pic set-bg" style="background-image: url('img/viviendas/<?= $rowVivienda->imagen ?>');">
                    <?php if ($rowVivienda->precio_venta != null && $rowVivienda->precio_venta != 0) { ?>
                        <div class="sale-notic">VENTA</div>
                    <?php } ?>
                    <?php if ($rowVivienda->precio_alquiler != null && $rowVivienda->precio_alquiler != 0) { ?>
                        <div class="rent-notic">ALQUILER</div>
                    <?php } ?>
                </div>
                <div class="feature-text">
                    <div class="text-center feature-title">
                        <?php if (sizeof($zona) > 0) { ?>
                            <?php foreach ($zona as $rowZona) { ?>
                                <?php if ($rowVivienda->zona == $rowZona->id) { ?>
                                    <h5><?= $rowZona->zona ?></h5>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                        <p><i class='bx bx-map'></i> <?= $rowVivienda->direccion ?></p>
                    </div>
                    <div class="room-info-warp">
                        <div class="room-info">
                            <div class="rf-left">
                                <p><i class='bx bx-shape-square'></i><?= $rowVivienda->metros_cuadrados ?> m²</p>
                                <p><i class='bx bx-hotel' ></i> <?= $rowVivienda->num_habitaciones ?> Habitaciones</p>
                                <p><i class='bx bx-phone'></i><?= $rowVivienda->telefono ?></p>
                            </div>
                            <div class="rf-right">
                                <p><i class='bx bxs-car-garage'></i> <?= $rowVivienda->num_garajes ?> Garages</p>
                                <p><i class='bx bx-bath'></i> <?= $rowVivienda->num_baños; ?> Baño</p>
                                <p><i class='bx bx-file'></i>Cert. Energética <?=$rowVivienda->certificado_energetico?></p>
                            </div>
                        </div>
                        <div class="room-info">
                            <div class="rf-left">
                                <p> 
                                    <i class='bx bx-user' ></i> 
                                    <?php if (sizeof($user) > 0) { ?>
                                        <?php foreach ($user as $rowUser) { ?>
                                            <?php if ($rowVivienda->propietario == $rowUser->id) { ?>
                                                <?= $rowUser->nombre ?> 
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                </p>
                            </div>
                            <div class="rf-right">
                                <?php 
                                    $diferencia_segundos = strtotime(date('Y-m-d')) - strtotime($rowVivienda->fecha);
                                    $diferencia_dias = round($diferencia_segundos / (60 * 60 * 24));
                                    if($diferencia_dias == 1){
                                        $dia='día';
                                    }else
                                        $dia='días';
                                ?>
                                <p><i class="fa fa-clock-o"></i> Hace <?= $diferencia_dias ?>&nbsp<?= $dia ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="room-prices">
                        <?php if ($rowVivienda->precio_venta != null && $rowVivienda->precio_venta != 0) { ?>
                            <a onclick="comprarVivienda(<?php echo $rowVivienda->id . ', ' . $logged; ?>);" class="room-price btn3">
                                <span class="price-text"><i class='bx bx-euro' ></i><?= number_format($rowVivienda->precio_venta, 2, ',', '.') ?></span>
                                <span class="action-text">Comprar</span>
                            </a>
                        <?php } ?>
                        <?php if ($rowVivienda->precio_alquiler != null && $rowVivienda->precio_alquiler != 0) { ?>
                            <a onclick="alquilarVivienda(<?php echo $rowVivienda->id . ', ' . $logged; ?>);" class="room-price-rent btn3">
                                <span class="price-text"> <i class='bx bx-euro' ></i><?= number_format($rowVivienda->precio_alquiler, 2, ',', '.') ?>/mes</span>
                                <span class="action-text">Alquilar</span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <?php if (sizeof($viviendas) > 0) { ?>
        <?php foreach ($viviendas as $rowVivienda) { ?>
            <?php if ($rowVivienda->disponible == 1 && $rowVivienda->novedades == 1) { ?>
                <?php mostrarVivienda($rowVivienda, $zona, $user) ?>
            <?php } ?>
        <?php } ?>
    <?php } else { ?>
        <p>No hay viviendas actualmente</p>
    <?php } ?>

</section>

<script src="<?= base_url("js/novedades.js")?>"></script>
<script src="<?= base_url("js/vivienda.js")?>"></script>