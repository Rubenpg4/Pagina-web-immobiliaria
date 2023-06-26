<!-- End page content -->
</section>
<head>
    <link rel="stylesheet" href="css/footer.css">
</head>
<footer class="footer" id="footer">
  <div class="container">
    <div class="footer-row">
    <div class="footer-link logo" >
        <a href="<?= base_url("/inicio") ?>"><img src="<?= base_url("img/iconoLogo.png") ?>" alt=""></a>
        <p>Proyecto final de WEB</p>
    </div>
      <div class="footer-link recursos">
        <h3 class="footer-h3">Recursos</h3>
        <ul>
          <li><a href="<?= base_url("/inicio") ?>">Inicio</a></li>
          <li><a href="<?= base_url("/novedades") ?>">Novedades</a></li>
          <li><a href="<?= base_url("/ofertas") ?>">Ofertas</a></li>
          <li><a href="<?= base_url("/mas-informacion") ?>">Más Información</a></li>
          <li><a href="<?= base_url("/users") ?>">Usuarios</a></li>
          <li><a href="<?= base_url("/viviendas") ?>">Viviendas</a></li>
        </ul>
      </div>
      <div class="footer-link contacto-uj">
        <div class="contacto">
          <h3 class="footer-h3">Contacto</h3>
          <ul>
            <li>jaam0024@red.ujaen.es</li>
            <li>rpg00035@red.ujaen.es</li>
          </ul>
        </div>
        <div class="uja">
          <a href="www.ujaen.es"><img src="<?= base_url("img/UJA-PNG.png")?>" alt="logo_uja"></a>
          <a href="https://gitlab.ujaen.es/Grupo5/TBW2223_equipo5"><img src="<?= base_url("img/gitlab.png")?>" alt="gitlab.png"></a>
          
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap Javascript -->
<script src="<?= base_url("js/footer.js")?>"></script>


<script src="<?= base_url("boostrap/js/bootstrap.bundle.min.js");?>"></script>
</body>
</html>
