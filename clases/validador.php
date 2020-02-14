<?php
require_once "db_sql.php";
require_once "soporte.php";

class Validador
{
  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function validarInformacion($informacion)
  {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}

    if ($informacion["username"] == "")
     {
      $errores["username"] = "El campo no debe estar vacío";
     }else if (strlen($informacion["username"])<3||strlen($informacion["username"])>18)
     {
			$errores["username"] = "El nombre de usuario debe tener entre 3 y 15 caracteres";
    }elseif ($this->db->traerPorUsername($informacion["username"]) != NULL)
     {
         $errores["username"]= "El nombre de usuario ya existe";
     }


     if ($informacion["name"] == "")
     {
         $errores["name"]= "El campo no debe estar vacío";
     }else if (strlen($_POST["name"])<3||strlen($informacion["name"])>50)
     {
         $errores["name"]= "El campo debe tener entre 3 y 50 caracteres";
     }


		if ($informacion["email"] == "") {
			$errores["email"] = "El campo no debe estar vacío";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El email ingresado no es valido";
		} else if ($this->db->traerPorMail($informacion["email"]) != NULL) {
			$errores["mail"] = "El email ingresado ya está en uso";
		}


		if ($informacion["password"] == "") {
			$errores["password"] = "El campo no debe estar vacío";
		}

		if ($informacion["cpassword"] == "") {
			$errores["cpassword"] = "El campo no debe estar vacío";
		}

		if ($informacion["password"] != "" && $informacion["cpassword"] != "" && $informacion["password"] != $informacion["cpassword"])
    {
			$errores["password"] = "Las contraseñas no coinciden";
		}


		return $errores;
	}

  public function validarLogin($informacion)
  {
		$errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}


		if ($informacion["email"] == "") {
			$errores["email"] = "El campo no debe estar vacío";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "El mail ingresado no es valido";
		} else if ($this->db->traerPorMail($informacion["email"]) == NULL) {
			$errores["mail"] = "El mail ingresado no está registrado";
		}

		$usuario = $this->db->traerPorMail($informacion["email"]);

		if ($informacion["password"] == "") {
			$errores["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario["password"]) == false) {
				$errores["password"] = "La contraseña es incorrecta";
			}
		}

		return $errores;
	}

}
