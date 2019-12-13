<?php
include_once('funciones.php');


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
            <?php if(!loginController()): ?>
            <div class="col-12 p-0"> <?php include_once('navbar.php'); ?> </div>
            <?php endif;?>
            <?php if(loginController()): ?>
            <div class="col-12 p-0"> <?php include_once('navbarlog.php'); ?> </div>
            <?php endif;?>

          </header>


          <section class="row rounded pt-4 <?php if(loginController()): ?> pb-3 <?php endif;?>">
            <article class="col-12 pt-5 pb-4" style="text-align: -webkit-center;">
              <h1 class="col-md-6 col-xs-12 py-3 mt-5" style="color:white; font-family: serif; font-size: 3em;font-weight:bold; background:crimson; opacity:90%">Demuestra tu conocimiento</h1>
              <hr class="col-7 border">
            </article>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#deportesModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/deportes.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#curiosidadesModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/pregunta.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#historiaModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/historia.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#animalesModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/animales2.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#shModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/super-heroes.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#cineModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/cine-terror.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#losSimpsonsModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/los-simpson.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#animesModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/animes.jpg" alt=""></a></div>
            <div class="col-sm-6 col-md-4 p-5 d-flex"><a href="#" data-toggle="modal" data-target="#gotModal" class="w-100"><img class="img-fluid rounded w-100 h-100 img-hov" src="img/stark.jpg" alt=""></a></div>

            <div class="modal fade" id="deportesModal" tabindex="-1" role="dialog" aria-labelledby="deportesModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deportesModalTitle">DEPORTES</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <img class="img-fluid rounded mx-1" src="img/deportes.jpg" alt="">
                    <div class="modal-body">
                      Preguntas sobre deportes
                    </div>
                  </div>
                </div>
              </div>

            <div class="modal fade" id="curiosidadesModal" tabindex="-1" role="dialog" aria-labelledby="curiosidadesModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                      <h5 class="modal-title" id="curiosidadesModalTitle">CURIOSIDADES</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <img class="img-fluid rounded mx-1" src="img/pregunta.jpg" alt="">
                      <div class="modal-body">
                        Preguntas sobre curiosidades
                      </div>
                    </div>
                  </div>
                </div>

            <div class="modal fade" id="historiaModal" tabindex="-1" role="dialog" aria-labelledby="historiaModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">HISTORIA</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <img class="img-fluid rounded mx-1" src="img/historia.jpg" alt="">
                        <div class="modal-body">
                          Preguntas sobre historia
                        </div>
                      </div>
                    </div>
                  </div>

            <div class="modal fade" id="animalesModal" tabindex="-1" role="dialog" aria-labelledby="animalesModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h5 class="modal-title" id="animalesModalTitle">ANIMALES</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <img class="img-fluid rounded mx-1" src="img/animales2.jpg" alt="">
                          <div class="modal-body">
                            Preguntas sobre animales
                          </div>
                        </div>
                      </div>
                    </div>

              <div class="modal fade" id="shModal" tabindex="-1" role="dialog" aria-labelledby="shModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content bg-dark text-white">
                            <div class="modal-header">
                              <h5 class="modal-title" id="shModalTitle">SUPER HÉROES</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <img class="img-fluid rounded mx-1" src="img/super-heroes.jpg" alt="">
                              <div class="modal-body">
                                Preguntas sobre super héroes
                              </div>
                            </div>
                          </div>
                        </div>

              <div class="modal fade" id="cineModal" tabindex="-1" role="dialog" aria-labelledby="cineModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                          <h5 class="modal-title" id="cineModalTitle">CINE DE TERROR</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <img class="img-fluid rounded mx-1" src="img/cine-terror.jpg" alt="">
                        <div class="modal-body">
                          Preguntas sobre cine de terror
                        </div>
                      </div>
                    </div>
                  </div>

              <div class="modal fade" id="losSimpsonsModal" tabindex="-1" role="dialog" aria-labelledby="losSimpsonsModalTitle" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content bg-dark text-white">
                          <div class="modal-header">
                              <h5 class="modal-title" id="losSimpsonsModalTitle">LOS SIMPSONS</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <img class="img-fluid rounded mx-1" src="img/los-simpson.jpg" alt="">
                            <div class="modal-body">
                              Preguntas sobre los simpsons
                            </div>
                          </div>
                        </div>
                      </div>

              <div class="modal fade" id="animesModal" tabindex="-1" role="dialog" aria-labelledby="animesModalTitle" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content bg-dark text-white">
                          <div class="modal-header">
                            <h5 class="modal-title" id="animesModalLongTitle">ANIME</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <img class="img-fluid rounded mx-1" src="img/animes.jpg" alt="">
                          <div class="modal-body">
                            Preguntas sobre anime
                          </div>
                        </div>
                      </div>
                    </div>

            <div class="modal fade" id="gotModal" tabindex="-1" role="dialog" aria-labelledby="gotModalTitle" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content bg-dark text-white">
                          <div class="modal-header">
                            <h5 class="modal-title" id="gotModalTitle">GAME OF THRONES</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <img class="img-fluid rounded mx-1" src="img/stark.jpg" alt="">
                          <div class="modal-body">
                            Preguntas sobre Game of Thrones
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php if(!loginController()): ?>

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
                <h6 class="text-white rounded-pill p-3 d-none d-sm-block" style="border: solid 2px ;">&copy 2019 Derechos reservados.</h6>
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