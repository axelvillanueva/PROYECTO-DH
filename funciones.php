<?php

function crearUsuario($datos) //Crea un array con los datos enviados por post y genera una ID
{
    $usuario = [
        'username' => $datos['username'],
        'email' => $datos['email'],
        'name' => $datos['name'],
        'password' => password_hash($datos['password'], PASSWORD_BCRYPT)
    ];
    $usuario['id'] = generarID();
      return $usuario;
}

function generarID() //Lee los datos del json y si el usuario ingresado es el primero en la base de datos, le da la ID número 1.
                    // Si ya hay usuarios registrados, busca la ID del último y le suma 1.
{
    $file = file_get_contents('Datos.json');

    if($file == ""){
        return 1;
    }

    $users = explode(PHP_EOL, $file);//'explode' delimita la base de datos en usuarios individuales, por filas.
                                    // El indicador del límite es "PHP_EOL"(indica elfinal de la línea)
                                    // Como el ultimo dato que genera siempre es un PHP_EOL(salto de línea), lo sacamos con array_pop()
    array_pop($users);

    $lastUser = $users[count($users) - 1];//A la cantidad de usuarios le restamos 1 (ya que arranca en la posición 0).
                                        // Ese número va a ser el parámetro donde encuentro al último usuario guardado.
    $lastUser = json_decode($lastUser, true);

    return $lastUser["id"] + 1; //Busco la 'ID' del último usuario, y a ese número le sumo 1.

}

function validarImagen($usuario) //Valido la imagen y la guardo en una carpeta, se distinguen por ID.
{
    $errores = [];

    $id = $usuario["id"];

    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {

        $nombreA = $_FILES["avatar"]["name"];
        $archivo = $_FILES["avatar"]["tmp_name"];

        $ext = pathinfo($nombreA, PATHINFO_EXTENSION);

        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
            $errores["avatar"] = "Solo aceptan formatos jpg y png";
            return $errores;
        }

        $miArchivo = dirname(__FILE__);

        $miArchivo = $miArchivo . "/img/Usuarios/";

        $miArchivo = $miArchivo. "perfil" . $id . "." . $ext;

        move_uploaded_file($archivo, $miArchivo);

    } else {

        $errores["avatar"] = "Hubo un error al procesar el archivo";

    }

    return $errores;
}

function guardarUsuario($usuario) // Guardo en un json el array creado en la función 'crearUsuario()'
{
    $usuarioJson = json_encode($usuario);
    file_put_contents('datos.json', $usuarioJson . PHP_EOL, FILE_APPEND);
}





function traerTodaLaBase() //Leo la base de datos y la guardo en la variable $baseJson y a todos los usuarios en $users, c/u en un $user.
                          //Luego decodifico cada $user y lo guardo dentro de $arrayUsers
{
    $baseJson = file_get_contents('datos.json');
    $users = explode(PHP_EOL, $baseJson);
    array_pop($users);

    foreach($users as $user) {
        $arrayUsers[] = json_decode($user, true);
    }
    return $arrayUsers;
}

function buscamePorEmail($email)//Busco si existe en la base de datos un email que coincida con el ingresado
{
    $arrayDeUsuariosTraidos = traerTodaLaBase();
    foreach($arrayDeUsuariosTraidos as $user) {
        if($user['email'] == $email) {
            return $user;
        }
    }
    return null;
}

function buscamePorUser($username)//Busco si existe en la base de datos un username que coincida con el ingresado
{
    $arrayDeUsuariosTraidos = traerTodaLaBase();
    foreach($arrayDeUsuariosTraidos as $user) {
        if($user['username'] == $username) {
            return $user;
        }
    }
    return null;
}

function login($usuario,$recordar=null) {
    // Una vez se cumpla la validacion del login contra la base de datos
    // seteamos como identificador de la misma, el email del usuario:
    //Creo una cookie que expire en 1hs a menos que hagan click en la opción "recordarme"
    $_SESSION["email"] = $usuario["email"];

    if ($recordar){
        setcookie("email", $usuario["email"]);
        setcookie("password", $usuario["password"]);

    }else{
      setcookie("email", $usuario["email"], time()+3600);
    }

}


function loginController()
{
    // SI la superglobal con el indice $_SESSION['email'] esta seteada
    if (isset($_SESSION["email"])) {
        // Dame TRUE
        return true;
    } else {
        // O...
        if (isset($_COOKIE["email"])) {
            // si la superglobal con el indice $_COOKIE['email']
            // esta seteada
            $_SESSION["email"] = $_COOKIE["email"];
            // Dame TRUE
            return true;
        } else {
            // Cualquier otra cosa, dame FALSE
            return false;
        }
    }
}
// 3 - Funcion de Logout
function logout()
{
    // corto la session
    session_destroy();
    // seteo la cookie con time en negativo para que tambien se borre
    setcookie("email", "", time() -1);
}




 ?>
