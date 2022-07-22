<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Abel OSH">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">
    
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><?= $data['page_title']; ?></h1>
      </div>
      <div class="register-box login-box">
        <div id="divLoading" >
          <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
          </div>
        </div>
        <form class="register-form" name="formRegister" id="formRegister" action="">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTRO DE USUARIO</h3>
          <div class="form-group d-flex">
            <label class="control-label left-label">CORREO</label>
            <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group d-flex" >
            <label class="control-label left-label">RUT</label>
            <input id="txtIdentificacion" name="txtIdentificacion" class="form-control" type="text" placeholder="RUT" autofocus>
          </div>
          <div class="form-group d-flex ">
            <label class="control-label left-label">NOMBRE</label>
            <input id="txtNombre" name="txtNombre" class="form-control" type="text" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group d-flex">
            <label class="control-label left-label">APELLIDO</label>
            <input id="txtApellido" name="txtApellido" class="form-control" type="text" placeholder="Apellido" autofocus>
          </div>
          <div class="form-group d-flex">
            <label class="control-label left-label">TELEFONO</label>
            <input id="intTelefono" name="intTelefono" class="form-control" type="text" placeholder="Teléfono" autofocus>
          </div>
          <div class="form-group d-flex">
            <label class="control-label left-label">CONTRASEÑA</label>
            <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
          </div>
          <input type="hidden" name="listRolid" value="3">
          <input type="hidden" name="listStatus" value="0">
          <div id="alertRegister" class="text-center"></div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> REGISTRARSE</button>
          </div>


        </form>

      </div>
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>
