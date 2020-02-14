<?php
  require_once 'soporte.php';

$paises=
[
  "Argentina" => "Argentina","Afganistán" => "Afganistán","Albania" => "Albania","Alemania" => "Alemania","Andorra" => "Andorra","Angola" => "Angola","Antigua y Barbuda" => "Antigua y Barbuda","Arabia Saudita" => "Arabia Saudita","Argelia" => "Argelia","Armenia" => "Armenia","Australia" => "Australia","Austria" => "Austria","Azerbaiyán" => "Azerbaiyán","Bahamas" => "Bahamas","Bangladés" => "Bangladés","Barbados" => "Barbados","Baréin" => "Baréin","Bélgica" => "Bélgica","Belice" => "Belice","Benín" => "Benín","Bielorrusia" => "Bielorrusia","Birmania" => "Birmania","Bolivia" => "Bolivia","Bosnia y Herzegovina" => "Bosnia y Herzegovina","Botswana" =>
"Botswana","Brasil" => "Brasil","Brunéi" => "Brunéi","Bulgaria" => "Bulgaria","Burkina Faso" => "Burkina Faso","Burundi" => "Burundi","Bután" => "Bután","Cabo Verde" => "Cabo Verde","Camboya" => "Camboya","Camerún" => "Camerún","Canadá" => "Canadá","Catar" => "Catar","Chad" => "Chad","Chile" => "Chile","China" => "China","Chipre" => "Chipre","Ciudad del Vaticano" => "Ciudad del Vaticano","Colombia" => "Colombia","Comoras" => "Comoras","Corea del Norte" =>
"Corea del Norte","Corea del Sur" => "Corea del Sur","Costa de Marfil" => "Costa de Marfil","Costa Rica" => "Costa Rica","Croacia" => "Croacia","Cuba" => "Cuba","Dinamarca" => "Dinamarca","Dominica" => "Dominica","Ecuador" => "Ecuador","Egipto" => "Egipto","El Salvador" => "El Salvador","Emiratos Árabes Unidos" => "Emiratos Árabes Unidos","Eritrea" => "Eritrea","Eslovaquia" => "Eslovaquia","Eslovenia" => "Eslovenia","España" => "España","Estados Unidos" => "Estados Unidos","Estonia" => "Estonia","Etiopía" => "Etiopía","Filipinas" => "Filipinas","Finlandia" => "Finlandia","Fiyi" => "Fiyi","Francia" => "Francia","Gabón" => "Gabón","Gambia" => "Gambia","Georgia" => "Georgia","Ghana" =>
"Ghana","Granada" => "Granada","Grecia" => "Grecia","Guatemala" => "Guatemala","Guyana" => "Guyana","Guinea" => "Guinea","Guinea ecuatorial" => "Guinea ecuatorial","Guinea-Bisáu" => "Guinea-Bisáu","Haití" => "Haití","Honduras" => "Honduras","Hungría" => "Hungría","India" => "India","Indonesia" => "Indonesia","Irak" => "Irak","Irán" => "Irán","Irlanda" => "Irlanda","Islandia" => "Islandia","Islas Marshall" => "Islas Marshall","Islas Salomón" =>
"Islas Salomón","Israel" => "Israel","Italia" => "Italia","Jamaica" => "Jamaica","Japón" => "Japón","Jordania" => "Jordania","Kazajistán" => "Kazajistán","Kenia" => "Kenia","Kirguistán" => "Kirguistán","Kiribati" => "Kiribati","Kuwait" => "Kuwait","Laos" => "Laos","Lesoto" => "Lesoto","Letonia" => "Letonia","Líbano" => "Líbano","Liberia" => "Liberia","Libia" => "Libia","Liechtenstein" => "Liechtenstein","Lituania" => "Lituania","Luxemburgo" => "Luxemburgo","Madagascar" => "Madagascar","Malasia" => "Malasia","Malaui" => "Malaui","Maldivas" => "Maldivas","Malí" => "Malí","Malta" =>
"Malta","Marruecos" => "Marruecos","Mauricio" => "Mauricio","Mauritania" => "Mauritania","México" => "México","Micronesia" => "Micronesia","Moldavia" => "Moldavia","Mónaco" => "Mónaco","Mongolia" => "Mongolia","Montenegro" => "Montenegro","Mozambique" => "Mozambique","Namibia" => "Namibia","Nauru" => "Nauru","Nepal" => "Nepal","Nicaragua" => "Nicaragua","Níger" => "Níger","Nigeria" => "Nigeria","Noruega" => "Noruega","Nueva Zelanda" => "Nueva Zelanda","Omán" => "Omán","Países Bajos" => "Países Bajos","Pakistán" =>
"Pakistán","Palaos" => "Palaos","Panamá" => "Panamá","Papúa Nueva Guinea" => "Papúa Nueva Guinea","Paraguay" => "Paraguay","Perú" => "Perú","Polonia" => "Polonia","Portugal" => "Portugal","Reino Unido" => "Reino Unido","República Centroafricana" => "República Centroafricana","República Checa" => "República Checa","República de Macedonia" => "República de Macedonia","República del Congo" => "República del Congo","República Democrática del Congo" => "República Democrática del Congo","República Dominicana" => "República Dominicana","República Sudafricana" => "República Sudafricana","Ruanda" => "Ruanda","Rumanía" => "Rumanía","Rusia" => "Rusia","Samoa" => "Samoa","San Cristóbal y Nieves" => "San Cristóbal y Nieves","San Marino" => "San Marino","San Vicente y las Granadinas" => "San Vicente y las Granadinas","Santa Lucía" => "Santa Lucía","Santo Tomé y Príncipe" => "Santo Tomé y Príncipe","Senegal" => "Senegal","Serbia" => "Serbia","Seychelles" => "Seychelles","Sierra Leona" =>
"Sierra Leona","Singapur" => "Singapur","Siria" => "Siria","Somalia" => "Somalia","Sri Lanka" => "Sri Lanka","Suazilandia" => "Suazilandia","Sudán" => "Sudán","Sudán del Sur" => "Sudán del Sur","Suecia" => "Suecia","Suiza" => "Suiza","Surinam" => "Surinam","Tailandia" => "Tailandia","Tanzania" => "Tanzania","Tayikistán" => "Tayikistán","Timor Oriental" => "Timor Oriental","Togo" => "Togo","Tonga" => "Tonga","Trinidad y Tobago" => "Trinidad y Tobago","Túnez" => "Túnez","Turkmenistán" => "Turkmenistán","Turquía" => "Turquía","Tuvalu" => "Tuvalu","Ucrania" => "Ucrania","Uganda" => "Uganda","Uruguay" => "Uruguay","Uzbekistán" => "Uzbekistán","Vanuatu" => "Vanuatu","Venezuela" => "Venezuela","Vietnam" => "Vietnam","Yemen" => "Yemen","Yibuti" => "Yibuti","Zambia" => "Zambia","Zimbabue" => "Zimbabue"
];
$namePers="";
$emailPers="";
$usernamePers="";

$errores=[];

if($_POST)
  {
    // 1 - Validación de datos
    $errores = $validador->validarInformacion($_POST);
    // 2 - Persistencia
    if (!isset($errores["name"]))
    {
      $namePers = $_POST["name"];
    }
    if (!isset($errores["email"]))
    {
			$emailPers = $_POST["email"];
		}
		if (!isset($errores["username"])) {
			$usernamePers = $_POST["username"];
		}

    // 3 - Crear Usuario
      if (count($errores) == 0) {
    $usuario = new Usuario($_POST['name'], $_POST['email'], $_POST['password'], $_POST['username'], $_POST['country']);

    $mail = $usuario->getEmail();
    // 4 - Guardar imagen
    $usuario->guardarImagen($usuario);
    // 5 - Guardar Usuario
    $db->guardarUsuario($usuario);
    //loguear
    $auth->loguear($_POST["email"]);
    //Redirigir al perfil
    header("Location:Perfil.php?mail=$mail");exit;
  }

}

 ?>


<!DOCTYPE html>
<html  dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script><meta charset="UTF-8">
    <link href="css/stylereg.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regístrate</title>
  </head>
  <body>
    <div class="container-fluid">

                                              <!--BARRA DE NAVEGACIÓN -->
      <header class="row pb-4">
        <?php if(!$auth->estaLogueado()): ?>
          <div class="col-12 p-0"> <?php include_once('navbar.php'); ?> </div>
        <?php endif;?>
        <?php if($auth->estaLogueado()): ?>
          <div class="col-12 p-0"> <?php include_once('navbarlog.php'); ?> </div>
        <?php endif;?>
      </header>

      <?php if($auth->estaLogueado()): ?>
      <div class="container">
        <div class="alert alert-danger" role="alert">
            Ya estás registrado. <a href="INICIO.php" class="alert-link">Regresa a inicio!</a>
        </div>
      </div>

      <?php endif;?>

      <?php if(!$auth->estaLogueado()): ?>                                        <!--FORMULARIO -->
      <div class="px-5 mx-4 mb-5 pb-5" >

        <section class="row justify-content-center contenedor-formulario pt-5">
          <div class="col-lg-6 col-md-8 border border-dark text-white formulario-registro mx-auto" style="background:rgba(186, 59, 59, 0.60);">
            <img class="position-absolute border border-dark rounded-circle d-block lobo" src="img/logo.jpg" alt="logo de ejemplo" style="width: 120px; top: -50px; left: calc(50% - 50px);">   <!--LOGO-->
            <h2 class="text-center pt-4 mt-5">Registrarse</h2>   <!--Título del formulario-->
            <form id='register' action='' method='post' class="role="form"" novalidate="novalidate" enctype="multipart/form-data"><!--Comienza el formulario-->
              <fieldset >

              <div class="form-group">        <!--PAÍS-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for="country" class="font-weight-bold">País:</label>
                <select name="country" class="col-lg-12 md-12 xs-12 text-white" style="background: #c44545;">
                  <?php foreach ($paises as $posicion=>$pais):?>
                    <?php if($_POST['country'] == $posicion): ?>
                      <option value="<?=$posicion?>" selected>
                        <?=$pais?>
                      </option>
                    <?php else : ?>
                      <option value="<?=$posicion?>">
                        <?=$pais?>
                      </option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                        </select>
            </div>
          </div>

          <div class="form-group">        <!--NOMBRE-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='name' class="font-weight-bold">Nombre completo:</label>
              <input class=" w-100 mb-1 form-control"  id="name" name="name"type="text" placeholder="Escriba aquí su nombre" value='<?=$namePers?>' maxlength="50">
              <span id='register_name_errorloc' class='error'><?=isset($errores["name"])?$errores["name"]:""?></span>
            </div>
          </div>

          <div class="form-group">        <!--NOMBRE DE USUARIO-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='username' class="font-weight-bold">Nombre de usuario:</label>
              <input class=" w-100 mb-1 form-control" name='username' id="username" type="text" placeholder="Escriba un nombre de usuario" value='<?=$usernamePers?>' maxlength="50">
              <span id='register_username_errorloc' class='error'><?=isset($errores["username"])?$errores["username"]:""?></span>
            </div>
          </div>

          <div class="form-group">        <!--CORREO ELECTRÓNICO-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='email' class="font-weight-bold">Correo electrónico:</label>
              <input class="w-100 mb-1 form-control" type="email" placeholder="Escriba aquí su correo electrónico" name='email' id='email' value='<?=$emailPers?>' maxlength="50">
             <span id='register_email_errorloc' class='error'><?=isset($errores["email"])?$errores["email"]:""?></span>
            </div>
          </div>

          <div class="form-group">         <!--CONTRASEÑA-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='password' class="font-weight-bold">Contraseña:</label><br/>
              <div class='pwdwidgetdiv' id='thepwddiv' ></div>
              <input class="w-100 mb-1 form-control"  type='password' name='password' id='password' maxlength="50" placeholder="Escriba una contraseña">
              <span id='register_password_errorloc' class='error'><?=isset($errores["password"])?$errores["password"]:""?></span>
            </div>
          </div>

          <div class="form-group">          <!--CONFIRMAR CONTRASEÑA-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='password' class="font-weight-bold">Confirmar contraseña:</label><br/>
              <div class='pwdwidgetdiv' id='thepwddiv' ></div>
              <input class="w-100 mb-1 form-control"  type='password' name='cpassword' id='password' maxlength="50" placeholder="Vuelva a escribir la contraseña">
              <span id='register_password_errorloc' class='error'><?=isset($errores["password"])?$errores["password"]:""?></span>
            </div>
          </div>


          <div class="form-group">                 <!--FOTO DE PERFIL-->

            <div class="form-group floating-label-form-group controls mx-4">
               <label for="avatar" class="font-weight-bold">Imagen de perfil: </label>
                  <input class="mt-3" type="file" name="avatar">
            </div>
          </div>

                 <!--BOTON DE ENVIAR-->
                 <div class="form-group mx-auto pb-2">
                    <button type="submit" class="btn rounded ml-4 mt-4 text-white bg-danger px-4 pt-1" style="font-size:20px;" id="sendMessageButton">Enviar</button>
                 </div>
        <a class="help-block Iniciar-sesión float-right text-decoration-none mb-4" style="color:black;" href="Log-in.php"> Ya tienes una cuenta? Inicia sesión</a>
       </fieldset>
      </form>
    </div>
  </section>
</div>
<?php endif;?>


</div>
  </body>
</html>
