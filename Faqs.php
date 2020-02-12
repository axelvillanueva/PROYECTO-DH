<?php

include_once('funciones.php');

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Faqs.css">
    <meta name="viewport" content="width=device-width, user-scarable=no, intial-scale=1.0,maximum-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soporte</title>
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

      <div class="container">
        <div class="row justify-content-center">
            <section class="col-sm-7 col-md-7 contenedor-texto px-5 mt-4 pb-5" style="background: url(img/bg-166.jpg) center top; background-size:cover; border: black solid 2px;">
              <h1 class="text-center display-4 pb-3 mt-5 mb-4" style="font-family: serif; font-size: 3em; font-weight: bold; color:red;">Preguntas frecuentes</h1>

                <hr class="border">
                <details class="pb-4">
                  <summary>¿Cómo accedo a jugar?</summary>
                    <p class="font-italic">Creando una cuenta, haciendo click en el botón REGISTRARSE, completando el formulario y siguiendo los pasos de validación.</p>
                    <p class="font-italic">Si posee cuenta, haga click en el botón INGRESAR, complete con nombre de usuario y contraseña.</p>
                </details>
                <details class="pb-4">
                  <summary>¿Olvido su contraseña o cuenta bloqueada?</summary>
                    <p class="font-italic">Haga click en el botón INGRESAR, luego haga click en el enlace con la frase OLVIDASTE TU CONTRASEÑA? Y complete con su dirección de correo
                        E-mail, llegará a su casilla un código para validar nueva contraseña.
                    </p>
                </details>
                <details class="pb-4">
                  <summary>¿Puedo poseer más de una cuenta?</summary>
                    <p class="font-italic">Puede poseer un total de tres (3) cuentas como máximo, tener en cuenta que para que esto sea posible debe tener instalada la app GOOGLE PLAY.</p>
                </details>
                <details class="pb-4">
                  <summary>¿En algún momento debo pagar algo?</summary>
                    <p class="font-italic">El juego y sus actualizaciones son completamente gratuitos. Pero también contamos con una tienda, en donde se pueden comprar complementos visuales
                        y algunas mejoras que haran más entretenido el juego y su experiencia se volverá más gratificante.
                    </p>
                </details>
                <details class="pb-4">
                  <summary>Acerca de este juego.</summary>
                    <p class="font-italic">Demuestra tu habilidad y conocimiento, en este asombroso juego que desafia tu mente. Combinando el clasico juego de preguntas y respuestas con espectaculares
                        imagenes. Disfrutarás de un entorno super colorido, una ambientación futurista y una interfaz muy sencilla e intuitiva.

                <details class="pb-4">
                  <summary>El juego posee anuncios publicitarios.</summary>
                    <p class="font-italic">En algunos casos, los anuncios publicitarios, serán requizito para poder acceder a algunas caracteristicas especiales o a fases de bonus. Esto
                        se debe, en parte, a que la publicidad constitutye fuente de ingresos económicos para continuar desarrollando y mejorando el juego.</p>
                </details>

                <details class="pb-4">
                  <summary>Caracteristicas especiales.</summary>
                    <ul class="font-italic">
                        <li class="">Gana gemas para subir de nivel.</li>
                        <li class="">Colecciona reacciones y emotes divertidos.</li>
                        <li class="">Desbloquea niveles y personajes especiales.</li>
                        <li class="">Desafia amigos o adversarios online </li>
                    </ul>
                </details>
                <details>
                  <summary>Especificaciones técnicas.</summary>
                     <ul class="font-italic">
                        <li class="">VERSIÓN: 2.0.</li>
                        <li class="">ÚLTIMA ACTUALIZACION: 12 FEB. 2020.</li>
                        <li class="">TAMAÑO DE DESCARGA: 100 MB.</li>
                        <li class="">LANZAMIENTO: 1 NOV. 2019.</li>
                    </ul>
                </details>

                <hr class="border">
            </section>

        </div>
      </div>
      <!-- Pie de pagina -->
      <footer >
           <nav id="black" class="navbar mt-5 fixed-bottom" style="height: 60px;">
               <h6 class="font-italic position-relative text-white" style="bottom: 15%;"><a class="" href="INICIO.php"><img class="rounded-circle" src="img/logo.jpg" alt="logotipo" width="60px"></a>  &copy 2020 Derechos reservados.</h6>
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
