<?php

require_once 'soporte.php';
$usuario=$db->traerPorMail($_SESSION["logueado"]);
$username = $usuario['email'];
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
    <link href="css/navbar.css" rel="stylesheet">
</head>
<body>
  <nav  id="barraN" class="col-12 barra-busqueda navbar navbar-expand-lg navbar-dark p-0 justify-content-center">
    <a class="navbar-brand mb-0 mx-5 text-white" style="font-size: 30px;">Bienvenido</a>
    <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="Inicio.php" class="enlace-nav nav-link active text-white pl-2" style="text-align-last: center;">Inicio</a>
        </li>
        <li class="nav-item">
          <a href="#" class="enlace-nav nav-link active text-white pl-2" style="text-align-last: center;">Ranking global</a>
        </li>
        <li class="nav-item">
          <a href="Faqs.php" class="enlace-nav nav-link active text-white" style="text-align-last: center;">Ayuda</a>
        </li>

      </ul>
      <div class="nav-item dropdown" style="right:20px;">
        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="desplegable" href="#" style="text-align-last: end; color: white;"> <img src="<?php if(isset($img)):?><?=$img?><?php else:?>img/logo.jpg<?php endif; ?>" class="rounded-circle" alt="" style="height: 45px; width:45px;"> </a>
        <div class="dropdown-menu px-3 pt-3 pb-4" style="background: black; right: 0px; left: auto; text-align-last: center; border-left: solid 3px; border-right:solid 3px; border-bottom:solid 3px;">
          <a class="usuario item text-muted"><?=$usuario['username']?> <br> <?=$usuario['email']?> </a>
          <a class="enlace-nav dropdown-item text-white mt-3 pt-3" style="border-top: red solid 1px;" href="Perfil.php">Perfil</a>
          <a class="enlace-nav dropdown-item text-white pt-2 pb-2"  href="Logout.php">Cerrar sesión</a>
        </div>
      </div>

    </div>
  </nav>
</body>
