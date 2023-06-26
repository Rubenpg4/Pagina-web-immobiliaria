<head>
    <link rel="stylesheet" href="<?= base_url("css/mas-info.css") ?>">
</head>

<div class="container-masinfo-titulo">
    <section class="section-masinfo-titulo">
        <div class="masinfo-titulo">
            <h3 class="titulo-inicial animate-from-bottom">Descubre todo lo que necesitas saber</h3>
            <p class="text-titulo animate-from-bottom-2">Aprende más acerca de nuestro equipo</p>
        </div>
    </section>
</div>
<section class="masinfo-section spad" >
    <section class="proyects-recientes-section spad">
    <h1 class="subtitle">Proyectos recientes<span class="point"></span></h1>
            <p class="copy__section">Estos son los proyectos realizados hasta la fecha de hoy</p>
            <article class="container-bg">
                <div class="card">
                    <div class="cards__text">
                        <img class="img-card" src="<?= base_url("img/logoJaen&CoDark.png") ?>" >
                        <p class="card__date">24 de Mayo 2023</p>
                        <p class="card__copy">Proyecto de Grupo Inmobiliario destinado a la ciudad de Jaén</p>
                        <a href="<?= base_url() ?>" class="card__button">Visitar</a>
                    </div>
                </div>
                <div class="background">
                    <img src="<?= base_url("img/mas-info.png") ?>" class="background__img">
                    <div class="background__text">
                        <h3 class="background__title">Objetivo</h3>
                        <p class="background__copy">Este es el proyecto final para la asignatura Tecnologías basadas en la web </p>
                    </div>
                </div>
            </article>
    </section>
    <section class="quienes-somos-section spad">
        <div class="contenedor-grid">
            <div class="memberteam juan">
                <img class="img-member" src="<?= base_url("img/yo.png") ?>" alt="">
                <div class="container-team-member">
                    <h2 class="h2-center">Juan Antonio Acosta Molina</h2>
                    <h4>Jefe Proyecto 1</h4>
                    <h6>jaam0024@red.ujaen.es</h6>
                </div>
            </div>
            <div class="memberteam ruben">
            <img class="img-member" src="<?= base_url("img/rubensio.jpeg") ?>" alt="">
                <div class="container-team-member">
                    <h2 class="h2-center">Rubén Prieto García</h2>
                    <h4>Jefe Proyecto 2</h4>
                    <h6>rpg00035@red.ujaen.es</h6>
                </div>
            </div>
            <div class="titulo-team">
                <h1 class="subtitle">Quienes somos</h1>
                <p class="copy__section">Componentes del equipo Jaén&Co</p>
            </div>
        </div>
    </section>
    <section class="localizacion-section">
        <div class="contenedor-grid-location">
            <div class="framecontainer">
                <iframe class="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2166.095920449443!2d-3.777991018764852!3d37.78806179557935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6dd7ac6a1b4847%3A0x700d4e0ddb40cdda!2sA3%20-%20Escuela%20Polit%C3%A9cnica%20Superior%20de%20Ja%C3%A9n.%20UJAEN!5e0!3m2!1ses!2ses!4v1679493490726!5m2!1ses!2ses"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="textcontainer">
                <h1 class="subtitle location">Localización</h1>
                <h4 class="subtitle location2">Escuela Politécnica Superior de Jaén</h4>
                <h5 class="subtitle location3">Edificio A3 - Campus Las Lagunillas</h5>
                <p class="copy__section">Email : eps@ujaen.es</p>
                <p class="copy__section">Esta ha sido nuestra area de trabajo y aprendizaje</p>
            </div>
        </div>
    </section>
</section>

<script src="<?= base_url("js/mas-info.js")?>"></script>