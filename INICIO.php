<?php
require_once 'soporte.php';

$results=$db->traerCategorias();


 ?>


 <!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scarable=no, intial-scale=1.0,maximum-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="css/styleini.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <title>Inicio</title>

</head>
<body>
        <div class="container-fluid">
                <!--Barra de navegacion-->

          <header class="row">
            <div class="col-12 d-flex portada p-0"><img class="w-100" src="img/portada.jpg" alt=""></div>
            <?php if(!$auth->estaLogueado()): ?>
            <div class="col-12 p-0"> <?php include_once('navbar.php'); ?> </div>
            <?php endif;?>
            <?php if($auth->estaLogueado()): ?>
            <div class="col-12 p-0"> <?php include_once('navbarlog.php'); ?> </div>
            <?php endif;?>

          </header>


          <section class="row rounded pt-4 <?php if($auth->estaLogueado()): ?> pb-3 <?php endif;?>">
            <article class="col-12 pt-5 pb-4" style="text-align: -webkit-center;">
              <h1 class="col-md-6 col-xs-12 py-3 mt-5" style="color:white; font-family: serif; font-size: 3em;font-weight:bold; background:crimson; opacity:90%">Demuestra tu conocimiento</h1>
              <hr class="col-7 border">
            </article>
            <?php foreach ($results as $result): ?>

            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#<?=$result->getNombreSinEspacios()?>Modal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="<?=$result->getImagen()?>" alt="" style="box-shadow: 10px 10px 6px -6px #777;"></a></div>

            <div class="modal fade" id="<?=$result->getNombreSinEspacios()?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?=$result->getNombreSinEspacios()?>ModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                      <h5 class="modal-title" id="<?=$result->getNombreSinEspacios()?>ModalTitle"><?=$result->getNombre()?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <img class="img-fluid rounded mx-1" src="<?=$result->getImagen()?>" alt="">
                    <div class="modal-body">
                      <?=$result->getDescripcion()?>
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach;?>


            <?php if(!$auth->estaLogueado()): ?>

            <div class="container" style="padding-top:7%;margin-bottom: 7%;">
              <div class="card-deck text-center">
                <div class="card shadow-sm">
                  <div class="card-header">
                    <h4>Estás registrado?</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="card-title pricing-card-title m-5">Entrá a tu cuenta y Jugá!</h2>
                    <a class="btn text-white p-3 m3 col-md-10 cBT" style="background-color: crimson;" href="Log-in.php">Ingresar!</a>
                  </div>
                </div>
                <div class="card shadow-sm">
                  <div class="card-header" style="padding-bottom: 20px;">
                    <h4 class="my-0">No estás registrado?</h4>
                  </div>
                  <div class="card-body">
                    <h2 class="card-title pricing-card-title m-5">Creá tu cuenta gratis! </h2>
                    <a class="btn text-white p-3 mr-3 col-md-12 cBT" style="background-color: crimson;" href="Registro.php">Registrarse!</a>
                  </div>
                </div>
              </div>
            </div>

          <?php endif;?>

          </section>


          <footer class="row">
            <div class="col-12 footer">
              <nav class="navbar ">
                <a class="rounded-circle p-2" href="INICIO.php" style="border: solid 2px white;">
                  <img src="img/logo.jpg" width="40" height="40" class="d-inline-block align-center rounded-circle" alt="logotipo">
                </a>
                <h6 class="text-white rounded-pill p-3 d-none d-sm-block" style="border: solid 2px ;">&copy 2020 Derechos reservados.</h6>
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link ml-2 p-0" href="https://es-la.facebook.com/"><img class="rounded-circle" src="img/icono-facebook.png" alt="logo-facebook" width="40px" style="border: solid 2px white;"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link ml-2 p-0" href="https://twitter.com/login?lang=es"><img class="rounded-circle" src="img/icono-twitter.png" alt="logo-twitter" width="40px" style="border: solid 2px white;"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link ml-2 p-0" href="https://www.instagram.com/?hl=es-la"><img class="rounded-circle" src="img/icono-instagram.png" alt="logo-instagram" width="40px" style="border: solid 2px white;"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link ml-2 p-0" href="https://www.youtube.com/?gl=AR&hl=es-419"><img class="rounded-circle" src="img/icono-youtube.png" alt="logo-youtub" width="40px" style="border: solid 2px white;"></a>
                  </li>
                </ul>
              </nav>
            </div>
          </footer>
      </div>
  </body>
</html>
