<?php

require_once "db.php";
require_once "usuario.php";


class DB_SQL extends DB{
    private $db;

    public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=proyecto;
    charset=utf8mb4;port=3306';
    $user = "root";
    $pass = "";
    $opt = [PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION];
    try {
      $this->db = new PDO($dsn, $user, $pass, $opt);
    } catch (Exception $e) {
      echo "La conexion a la base de datos falló: " . $e->getMessage();
    }
  }

    public 	function guardarUsuario(Usuario $usuario)
   {
  		$db=$this->db;
  		$query = $db->prepare("Insert into usuarios (
        nombre,
        email,
        password,
        username,
        pais
        ) values(
          :nombre,
          :email,
          :password,
          :username,
          :pais
          )");

  		$query->bindValue(":nombre", $usuario->getNombre(), PDO::PARAM_STR);
  		$query->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
  		$query->bindValue(":password", $usuario->getPassword(), PDO::PARAM_STR);
  		$query->bindValue(":username", $usuario->getUsername(), PDO::PARAM_STR);
  		$query->bindValue(":pais", $usuario->getPais(), PDO::PARAM_STR);

  		$id = $db->lastInsertId();
      $usuario->setId($id);

  		$query->execute();

  		return $usuario;

  	}

    public function traerCategorias()
    {
      $db=$this->db;
      $query=$db->prepare('SELECT * FROM categorias ORDER BY id;');
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function traerTodos()
    {
		$db=$this->db;

		$query = $db->prepare("Select * from usuarios");
		$query->execute();

		return $query->fetchAll();
	   }
    public function traerPorMail($email)
    {
  		$db=$this->db;

  		$query = $db->prepare("Select * from usuarios where email = :email");
  		$query->bindValue(":email", $email, PDO::PARAM_STR);

  		$query->execute();

  		return $query->fetch();
  	 }
    public function traerPorUsername($username)
    {
    		$db=$this->db;

    		$query = $db->prepare("Select * from usuarios where username = :username");
    		$query->bindValue(":username", $username, PDO::PARAM_STR);

    		$query->execute();

    		return $query->fetch();
    	}
}
