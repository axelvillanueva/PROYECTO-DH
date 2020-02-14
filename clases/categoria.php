<?php


class Categoria
{
  private $id;
  private $nombre;
  private $descripcion;
  private $imagen;
  public function __construct(string $nombre, string $descripcion, string $imagen)
  {
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->imagen = $imagen;

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

  public function getNombreSinEspacios()
  {
    return str_replace(' ', '', $this->nombre);
  }

  public function setNombre($nombre)
  {
  $this->nombre = $nombre;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setDescripcion($descripcion)
  {
  $this->descripcion = $descripcion;
  }

  public function getImagen()
  {
    return $this->imagen;
  }

  public function setImagen($imagen)
  {
  $this->imagen = $imagen;
  }
}
