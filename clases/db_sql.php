<?php

require_once "db.php";
require_once "usuario.php";
require_once "categoria.php";


class DB_SQL extends DB{
    private $db;

    public function __construct($db)
  {
    $this->db=$db;
  }

  public function crearTablaUsuarios()
  {
    $db=$this->db;
    $query = $db->prepare ('CREATE TABLE `usuarios`
      (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pais` varchar(100) NOT NULL,

  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
);
');
    $query->execute();
    $exito = "La tabla 'usuarios' se ha creado con exito!";
    return $exito;
  }

  public function crearTablaCategorias()
  {
    $db=$this->db;
    $query=$db->prepare
    ('CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `imagen` varchar(255) NOT NULL,

  PRIMARY KEY (`id`)
);
');
    $query->execute();
    $exito = "La tabla 'categorias' se ha creado con exito!";
    return $exito;
}

    public 	function guardarUsuario(Usuario $usuario)
   {
  		$db=$this->db;
  		$query = $db->prepare("Insert into `usuarios` (
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
      $query->execute();

  		$id = $db->lastInsertId();
      $usuario->setId($id);



  		return $usuario;

  	}

    public function guardarCategoria(Categoria $categoria)
    {
      $db=$this->db;
  		$query = $db->prepare("Insert into `categorias` (
        nombre,
        descripcion,
        imagen
        ) values(
          :nombre,
          :descripcion,
          :imagen
          )");

  		$query->bindValue(":nombre", $categoria->getNombre(), PDO::PARAM_STR);
  		$query->bindValue(":descripcion", $categoria->getDescripcion(), PDO::PARAM_STR);
  		$query->bindValue(":imagen", $categoria->getImagen(), PDO::PARAM_STR);

  		$id = $db->lastInsertId();
      $categoria->setId($id);

  		$query->execute();

  		return $categoria;
    }

    public function traerCategorias()
    {
      $db=$this->db;
      $query=$db->prepare('SELECT * FROM categorias ORDER BY id;');
      $query->execute();
      $results= $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($results as $result) {
        $arrayCategorias[]=new Categoria($result['nombre'],$result['descripcion'],$result['imagen']);
      }
      return $arrayCategorias;
    }

    public function traerUsuarios()
    {
      $db=$this->db;
      $query=$db->prepare('SELECT * FROM usuarios ORDER BY id;');
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
