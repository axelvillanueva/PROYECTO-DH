<?php
require_once "soporte.php";
$dbjson = new DB_JSON();
$usuarios = $dbjson->traerTodos();
foreach ($usuarios as $usuario)
 {
  $usuarioExtraido = new Usuario($usuario['name'], $usuario['email'], $usuario['password'], $usuario['username'], $usuario['pais']);
  $db->guardarUsuario($usuarioExtraido);
}
