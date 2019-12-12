<?php
  include_once('funciones.php');

$Paises=["Argentina","Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín","Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina",
"Botswana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi","Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre","Ciudad del Vaticano","Colombia","Comoras",
"Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca","Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos","Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia",
"Ghana","Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría","India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall",
"Islas Salomón","Israel","Italia","Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto","Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui","Maldivas","Malí",
"Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco","Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega","Nueva Zelanda","Omán","Países Bajos",
"Pakistán","Palaos","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia","Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda","Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia","Seychelles",
"Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia","Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez","Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam","Yemen","Yibuti","Zambia","Zimbabue"];
$nombre="";
$email="";
$usuario="";
$contrasenia="";

if($_POST) {
    // 1 - Validación de datos
    $errores=[];

    $name = trim($_POST['name']);
    if (!$_POST["name"]) {
        $errores["name"]= "El campo no debe estar vacío";
    }else if (strlen($_POST["name"])<3||strlen($_POST["name"])>30) {
        $errores["name"]= "El campo debe tener entre 3 y 30 caracteres";
    } else{
    $nombre= $_POST["name"];
  }


    $username = trim($_POST['username']);

    if (!$_POST["username"]) {
        $errores["username"]= "El campo no debe estar vacío";
    }else if (strlen($_POST["username"])<3||strlen($_POST["username"])>15) {
        $errores["username"]= "El campo debe tener entre 3 y 15 caracteres";
    }elseif (buscamePorUser($username)['username'] == $username) {
        $errores["username"]= "El nombre de usuario ya existe";
    } else{
      $usuario= $_POST["username"];
    }

    $email = trim($_POST['email']);

    if (!$_POST["email"]) {
        $errores["email"]= "El campo no debe estar vacío";
    }else if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
        $errores["email"]= "El email ingresado no es valido";
    }elseif (buscamePorEmail($email)['email'] == $email) {
        $errores["email"]= "El email ingresado ya está en uso";
    } else{
      $email= $_POST["email"];
    }

    if($_POST['password'] == "") {
        $errores['password'] = "El campo no debe estar vacío";
    } elseif (strlen($_POST['password']) <= 5) {
        $errores['password'] = "La contraseña debe tener entre 8 y 25 caracteres";
    } elseif ($_POST['password'] != $_POST['confpassword']) {
        $errores['password'] = "Las contraseñas no coinciden";
    }

    // 2 - Crear Usuario
    if(count($errores) == 0) {
        $usuario = crearUsuario($_POST);
    // 3 - Validación de la imagen
        $erroresAvatar = validarImagen($usuario);
    // 4 - Agrego los errores del avatar a $errores
        $errores = array_merge($errores, $erroresAvatar);
    // 5 - vuelvo a validar $errores
        if(count($errores) == 0) {
    // 6 - Guardo usuario y lo mando a loguearse
            guardarUsuario($usuario);
            header('Location: log-in.php');
            exit;
        }
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
        <?php if(!loginController()): ?>
          <div class="col-12 p-0"> <?php include_once('navbar.php'); ?> </div>
        <?php endif;?>
        <?php if(loginController()): ?>
          <div class="col-12 p-0"> <?php include_once('navbarlog.php'); ?> </div>
        <?php endif;?>
      </header>

      <?php if(loginController()): ?>
      <div class="container">
        <div class="alert alert-danger" role="alert">
            Ya estás registrado. <a href="INICIO.php" class="alert-link">Regresa a inicio!</a>
        </div>
      </div>

      <?php endif;?>

      <?php if(!loginController()): ?>                                        <!--FORMULARIO -->
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
                  <?php foreach ($Paises as $posicion=>$Pais):?>
                    <?php if($_POST['country'] == $posicion): ?>
                      <option value="<?=$posicion?>" selected>
                        <?=$Pais?>
                      </option>
                    <?php else : ?>
                      <option value="<?=$posicion?>">
                        <?=$Pais?>
                      </option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                        </select>
            </div>
          </div>

          <div class="form-group">        <!--NOMBRE-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='name' class="font-weight-bold">Nombre completo:</label>
              <input class=" w-100 mb-1 form-control"  id="name" name="name"type="text" placeholder="Escriba aquí su nombre" value='<?=$nombre?>' maxlength="50">
              <span id='register_name_errorloc' class='error'><?=isset($errores["name"])?$errores["name"]:""?></span>
            </div>
          </div>

          <div class="form-group">        <!--NOMBRE DE USUARIO-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='username' class="font-weight-bold">Nombre de usuario:</label>
              <input class=" w-100 mb-1 form-control" name='username' id="username" type="text" placeholder="Escriba un nombre de usuario" value='<?=$usuario?>' maxlength="50">
              <span id='register_username_errorloc' class='error'><?=isset($errores["username"])?$errores["username"]:""?></span>
            </div>
          </div>

          <div class="form-group">        <!--CORREO ELECTRÓNICO-->
            <div class="form-group floating-label-form-group controls mx-4">
              <label for='email' class="font-weight-bold">Correo electrónico:</label>
              <input class="w-100 mb-1 form-control" type="email" placeholder="Escriba aquí su correo electrónico" name='email' id='email' value='<?=$email?>' maxlength="50">
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
              <input class="w-100 mb-1 form-control"  type='password' name='confpassword' id='password' maxlength="50" placeholder="Vuelva a escribir la contraseña">
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
