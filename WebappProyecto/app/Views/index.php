<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("css/index.css") ?>">
    <title>Jaén&Co</title>
    <link rel="icon" href="<?= base_url("img/iconoLogo.png") ?>">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<div class="opacidad"></div>
<header class="navbar">
    <div class="nav-logo">
        <a href="<?= base_url() ?>"><img src="<?= base_url("img/logoJaen&CoLight.png") ?>" alt="logo_Jaén&Co"></a>
    </div>
    <nav>
        <ul class="nav-links">
            <li><a href="<?= base_url("inicio")?>">Inicio</a></li>
            <li><a href="<?= base_url("novedades")?>">Novedades</a></li>
            <li><a href="<?= base_url("ofertas")?>">Ofertas</a></li>
            <li><a href="<?= base_url("mas-informacion")?>">Más Información</a></li>
        </ul>
    </nav>
    <?php $session = session();
                    $data['logged_in'] = $session->get('logged_in');
                    $data['user'] = $session->get('user'); ?>
                    
    <?php if(!$data['logged_in'] = $session->get('logged_in')) { ?>
        <div class="div-btn-reg">
            <a href="<?= base_url("login")?>" class="btn btn-nav" >Inicia Sesión</a>
            <a href="<?= base_url("signup")?>" class="btn btn-nav" >Registrate</a>
        </div>
    <?php } ?>
</header>

<body>
   
    <div class="div-lower">
        <p class="subtitulo">Grupo Inmobiliario Jaén&Co</p>
    </div>
    <div class="div-higger">
        <p class="titulo">Encuentra tu hogar perfecto en pocos <br>segundos</p>
    </div>
    <div class="div-btn-bienve">
        <a class="btn btn-bienve-empez" href="<?= base_url("inicio")?>">Empezar a buscar</a>
    </div>
   
</body>
<script src="<?= base_url("js/index.js") ?>"></script>

</html>