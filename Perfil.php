<?php

require_once 'soporte.php';
// Generando el perfil dinamicamente!
if ($auth->estaLogueado())
 {
  $usuario = $auth->usuarioLogueado();
 }

$mailDelUsuario = $usuario["email"];

    if (isset(glob("img/Usuarios/$mailDelUsuario.*")[0]))
    {
        //Este if se ejecuta si esta seteado el indice 0. Es la unica manera de no recibir error a la hora de verificar esto.
        $img = glob("img/Usuarios/$mailDelUsuario.*")[0];
    } else
    {
        $img = null;
    }




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
    <title>Perfil</title>

</head>
<body style="background: url(img/bg-80.jpg) fixed center top; background-size: cover;">
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


          <div class="container">

              <?php //SI EL CONTROLLER DE LOGIN DA FALSE, MUESTRO EL SIGUIENTE BLOQUE ?>
              <?php if(!$auth->estaLogueado()): ?>
              <div class="alert alert-danger" role="alert">
                  No estas autorizado en este sistema <a href="registro.php" class="alert-link">Registrate!</a>
              </div>
              <?php endif;?>
              <?php if($auth->estaLogueado()): ?>
              <div class="row justify-content-center">

                  <div class="card col-md-4 col-sm-8 my-5" style="background: url(img/bg-117.jpg); border: solid 4px;">
                  <?php if(isset($img)):?><!--Si HAY imagen, mostrala-->
                      <img class="card-img-top rounded-circle mt-3" style="align-self:center; width: 72%; height: 250px; border: #863c3c solid 4px;" src="<?=$img ?>" alt="Card image cap">
                  <?php else:?><!--Si no, mostrá la imagen default-->
                      <img class="card-img-top rounded-circle mt-3" style="align-self:center; width: 72%; height: 250px; border: #863c3c solid 4px;" src="img/logo.jpg" alt="Card image cap">
                  <?php endif; ?>
                      <div class="card-body text-center">
                          <h3 class="card-title" style="color:black;">"<?=$usuario['nombre']?>" </h3>
                          <p class="card-text my-4" style="font-size: larger; font-weight: bold; color: black;">Nivel: 0 <br> Trivias resueltas: 0 <br> País: <?=$usuario['pais']?></p>
                          <a href="Inicio.php" class="btn btn-danger">Ir a jugar!</a>
                      </div>
                  </div>
                  <div class="col-md-8 offset-1 ml-0 my-5" style="background:rgba(186, 59, 59, 0.60); border-top: solid 4px; border-right: solid 4px; border-bottom: solid 4px;">
                  <h1 style="color:black;">Hola!</h1>
                  </div>
              </div>
          </div>
        <?php endif;?>

      </div>
  </body>
</html>
