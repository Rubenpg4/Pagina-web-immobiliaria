<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jaén&Co</title>
  <link rel="icon" href="<?= base_url("img/iconoLogo.png") ?>">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="<?= base_url("css/registro.css") ?>">
</head>
<body>
  <?php $errors= [];?>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0" id="main">
    <div class="container">
      <div class="card register-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="<?= base_url("img/registroIMG2.jpg")?>" alt="registro" class="register-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body" id="card_body">
              <div class="brand-wrapper">
                <img src="<?= base_url("img/logoJaen&CoDark.png")?>" alt="logo" class="logo" id="logo_pag">
              </div>
              <p class="register-card-description" id="register_card_description">Crea tu cuenta</p>
              <form action="<?= base_url('/register') ?>" method="post" id="formulario">
              <?= csrf_field() ?>
                <div class="form-group" hidden>
                  <div class="alert alert-danger alert-dismisible fade show" role="alert">
                    <?php 
                      foreach($errors as $error){
                        echo $error .'<br>';
                      }
                    ?>
                  </div>
                </div>
                <div class="form-group">
                    <label for="username" class="sr-only">Nombre Usuario</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Usuario">
                    <small class="msg" id="err_msg_username"></small>
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electronico">
                    <small class="msg" id="err_msg_email"></small>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                    <small class="msg" id="err_msg_pass" ></small>
                    <span class="error"><?= \Config\Services::validation()->listErrors(); ?></span>
                    <span class="error">
                    <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
                    <?php endif;?>
                    <?php if(session()->getFlashdata('msg-bad')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg-bad') ?></div>
                    <?php endif;?>
                    </span>
                  </div>
                  <input name="register" id="register" class="btn btn-block register-btn mb-4 g-recaptcha" 
                  type="submit" value="Verificar"  data-sitekey="6LcQURklAAAAALvTw1gq04oYuVd94qe_OP87iMkc" 
                  data-callback='onSubmit' data-action='submit' >
                </form>
                <a href="#!" class="forgot-password-link" hidden>Olvidaste la contraseña? </a>
                <p class="register-card-footer-text" id="register_card_footer_text">Ya tienes cuenta ?  <a href="/login" class="text-reset"> Inicia Sesión Aquí</a></p>
                <nav class="register-card-footer-nav">
                  <a href="#!" hidden>Terms of use.</a>
                  <a href="#!" hidden>Privacy policy</a>
                  <a href="/inicio" id="mastarde"> Registrarse más tarde </a>
                  <div class="div-btn-switch" id="toggleDark">
                    <div class="div-btn-icon">
                        <i class='bx bx-sun'></i>
                    </div>
                </div>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?= base_url("js/registro.js") ?>"></script>
</body>
</html>
