<?php
include_once('funciones.php');
$email="";

if($_POST) {
  $errores=[];
    // 1 - Busco si el email está registrado
    $usuario = buscamePorEmail($_POST['email']);
    if($usuario !== null) {
    // 2 - Si es distinto de null, significa que está registrado el email. Hago la persistencia y solo queda verificar la contraseña.
        $email=$_POST['email'];
        if(password_verify($_POST['password'], $usuario['password']) === true) {
          // 3- Si la contraseña es correcta inicio sesión
          if ($_POST['Recordarme']!=NULL) {
            login($usuario,true);
          }else {
            login($usuario);
            // Si no son correctos los datos ingresados muestro los errores
        }
      }else {
          $errores["password"] = "La contraseña es incorrecta";
        }
    }else {
      $errores["email"] = "El email no está registrado";
    }
    if(loginController()) {
        header('Location: Perfil.php');
        // 4- Lo derivo a inicio y corto la ejecucion de codigo.
        exit;
    }
}

 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script><meta charset="UTF-8">
    <link href="css/stylelog.css" rel="stylesheet">
    <title>Iniciar sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  </head>
  <body>

<div class="container-fluid">

                                            <!--BARRA DE NAVEGACIÓN -->
    <header class="row pb-4">
      <?php if(!loginController()): ?>
        <div class="col-12 p-0"> <?php include_once('navbar.php'); ?> </div>
      <?php endif;?>
      <?php if(loginController()): ?>
        <div class="col-12 p-0"> <?php include_once('navbarlog.php'); ?> </div>
      <?php endif;?>
    </header>
                                                  <!--FORMULARIO -->

   <div class="container">

     <?php if(loginController()): ?>
       <div class="alert alert-danger" role="alert">
           Ya has iniciado sesión <a href="INICIO.php" class="alert-link">Regresa a inicio!</a>
       </div>
     <?php endif;?>

    <?php if(!loginController()): ?>
    <section class="row contenedor justify-content-center pt-5">
      <div class="container col-lg-4 col-md-6 border rounded text-white login-caja px-4" style="background:rgba(186, 59, 59, 0.60);">
        <img class="position-absolute rounded-circle border border-dark d-block lobo" src="img/logo.jpg" alt="logo de ejemplo" style="width: 100px; top: -50px; left: calc(50% - 50px);">   <!--LOGO-->
        <h4 class="text-center pt-5 pb-3 mt-2">Iniciar sesión</h4>

        <form action="" method="post">
          <div class="row">
                                                  <!-- EMAIL -->
            <div class="col-12 form-group">
              <label class="font-weight-bold p-o m-0" for="email">Correo electrónico</label>
                <input type="email" name="email" id="password" class=" w-100 mb-1 form-control" placeholder="Ingresa tu correo electrónico" value='<?=$email?>' maxlength="50">
                <span id='register_email_errorloc' class='error'><?=isset($errores["email"])?$errores["email"]:""?></span>
            </div>
                                                  <!-- PASSWORD -->
            <div class="col-12 form-group">
              <label class="font-weight-bold p-o m-0" for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="w-100 mb-1 form-control" placeholder="Ingresa tu contraseña">
                <span id='register_password_errorloc' class='error'><?=isset($errores["password"])?$errores["password"]:""?></span>
            </div>
                                                  <!-- REMEMBER-ME -->
            <div class="col-12 form-group">
              <label class="font-weight-bold p-0 m-0" >
               <input class="float-right ml-1 mt-2" type="checkbox" name="Recordarme">Recordarme
               </label>
            </div>
                               <!--BOTON DE ENVIAR-->
              <input class="w-100 mb-3 bg-danger text-white mx-3 border-0" style="height: 40px; font-size: 18px; border-radius: 20px;" type="submit" value="Iniciar sesión">

            <a class="help-block col-6 text-decoration-none mb-3" style="color:black;" href="#">Olvidaste tu contraseña?</a><br>
            <a class="help-block col-6 text-decoration-none mb-3" style="color:black;" href="registro.php">No tienes una cuenta? Regístrate</a>
          </div>
        </form>
      </div>
    </section>
  <?php endif;?>

   </div>

                                              <!-- Pie de pagina -->
    <footer >
      <nav id="black" class="navbar fixed-bottom" style="height: 60px;">
        <h6 class="font-italic position-relative text-white" style="bottom: 15%;"><a class="" href="INICIO.html"><img class="rounded-circle" src="img/logo.jpg"  alt="logotipo" width="60px"></a>&copy 2019 Derechos reservados.</h6>
        <ul class="nav  justify-content-end">
          <li class="nav-item float-right">
            <a class="nav-link position-relative" style="bottom: 15%;" href="https://es-la.facebook.com/" target="_black"><img class="border border-primary rounded-circle" src="img/icono-facebook.png" alt="logo-facebook" width="40px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link position-relative" style="bottom: 15%;" href="https://twitter.com/login?lang=es" target="_black"><img class="border border-primary rounded-circle" src="img/icono-twitter.png" alt="logo-twitter" width="40px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link position-relative" style="bottom: 15%;" href="https://www.instagram.com/?hl=es-la" target="_black"><img class="border border-primary rounded-circle" src="img/icono-instagram.png" alt="logo-instagram" width="40px"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link position-relative" style="bottom: 15%;" href="https://www.youtube.com/?gl=AR&hl=es-419" target="_black"><img class="border border-danger rounded-circle" src="img/icono-youtube.png" alt="logo-youtub" width="40px"></a>
          </li>
            </ul>
      </nav>
    </footer>
  </div>
</body>
</html>
