<?php

include_once('funciones.php');
$usuario = buscamePorEmail($_SESSION["email"]);
$username = $usuario['email'];
$id = $usuario["id"];
if (isset(glob("img/Usuarios/perfil$id.*")[0])) {
  $archivo = glob("img/Usuarios/perfil$id.*")[0];
} else {
  $archivo = null;
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
        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="desplegable" href="#" style="text-align-last: end; color: white;"> <img src="<?php if(isset($archivo)):?><?=$archivo ?><?php else:?>img/logo.jpg<?php endif; ?>" class="rounded-circle" alt="" style="height: 45px; width:45px;"> </a>
        <div class="dropdown-menu" style="background: black; right: 0px; left: auto;">
          <a class="enlace-nav dropdown-item text-white" href="Perfil.php" style="text-align-last: center;">Perfil</a>
          <a class="enlace-nav dropdown-item text-white" href="Logout.php" style="text-align-last: center;">Cerrar sesión</a>
        </div>
      </div>

    </div>
  </nav>
</body>
