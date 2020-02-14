<?php



class Usuario {
  private $id;
  private $nombre;
  private $email;
  private $password;
  private $username;
  private $pais;

  public function __construct($nombre, $email, $password, $username, $pais){
    $this->nombre = $nombre;
    $this->email = $email;
    $this->setPassword($password);
    $this->username = $username;
    $this->pais = $pais;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
  $this->id = $id;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
  $this->nombre = $nombre;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
  $this->email = $email;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
  $this->password =password_hash($password, PASSWORD_DEFAULT);
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
  $this->username = $username;
  }

  public function getPais()
  {
    return $this->pais;
  }

  public function setPais($pais)
  {
  $this->pais = $pais;
  }

  public function guardarImagen(){
    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
    {

      $nombre=$_FILES["avatar"]["name"];
      $archivo=$_FILES["avatar"]["tmp_name"];

      $ext = pathinfo($nombre, PATHINFO_EXTENSION);

      if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
        return "Solo se aceptan formatos jpg, jpeg y png";
      }

      $miArchivo = dirname(__FILE__);
      $miArchivo = $miArchivo . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "Usuarios" . DIRECTORY_SEPARATOR;
      $miArchivo = $miArchivo . $this->getEmail() . "." . $ext;

      move_uploaded_file($archivo, $miArchivo);
    }
  }
}
