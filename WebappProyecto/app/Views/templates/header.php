<!DOCTYPE html>
<html class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaén&Co</title>
    <link rel="icon" href="<?= base_url("img/iconoLogo.png") ?>">
    <link rel="stylesheet" href="<?= base_url("boostrap/css/bootstrap.min.css") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url("css/header.css") ?>">
    <style>
        main > .container {
        padding: 5rem 0px 0;
        width:100%;
        margin:0;
        }
    </style>
</head>
<body class="d-flex flex-column">
    <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark shadow-light" id="Navbar">
        <div class="container-fluid">
            <div class="nav-logo">
                <a href="<?= base_url()?>"><img id="logo_pag" src="<?= base_url("img/logoJaen&CoDark.png")?>"  alt="logo_Jaén&Co"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link nav-home active" aria-current="home" href="<?=base_url('inicio') ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-novedades" href="<?=base_url('novedades')?>">Novedades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-ofertas" href="<?=base_url('ofertas')?>">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-mas-informacion" href="<?=base_url('mas-informacion')?>">Más información</a>
                </li>
            </ul>
            <div class="div-btn-switch" id="toggleDark">
                <div class="div-btn-icon">
                    <i class='bx bx-sun'></i>
                </div>
            </div>
            <?php $session = session();
                    $data['logged_in'] = $session->get('logged_in');
                    $data['user'] = $session->get('user'); ?>
            <?php if ($data['logged_in'] && $data['user']!=null) { ?>
                <div class="div-btn-altavivienda">
                    <a class="btn btn-primary" href="<?= base_url('alta') ?>"><i class='bx bx-clinic'></i>&nbsp Subir</a>
                </div>
                <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-user'></i>&nbsp<?= $data['user']->nombre ?>
                </a>

                <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink">
                    <?php if(session('user')->role == 2) {?>
                    <li><a class="dropdown-item" href="<?= base_url('admin_list') ?>"><i class='bx bx-list-ul' ></i> Usuarios</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('viviendas') ?>"><i class='bx bx-list-ul' ></i> Viviendas</a></li>
                    <?php } ?>
                    <li><a class="dropdown-item" href="<?= base_url('mis-propiedades') ?>"><i class='bx bx-building-house'></i> Mis Propiedades</a></li>
                    <li><a class="dropdown-item logout" href="<?= base_url('logout') ?>"><i class='bx bx-power-off'></i> Cerrar sesión</a></li>
                </ul>
                 </div>
            <?php } else { ?>
                <form class="d-flex botones">
                    <a href="<?= base_url('login') ?>" class="btn btn-primary">Inicio Sesion</a>
                    <a href="<?= base_url('signup') ?>" class="btn btn-primary">Registrarse</a>
                </form>
            <?php } ?>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    
</header>
<script src="<?= base_url("js/header.js")?>"></script>
    </body>
   
<!-- Begin page content -->

<section class="cuerpo-principal">
