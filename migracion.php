<?php
require_once "soporte.php";

$dbjson = new DB_JSON();
$usuarios = $dbjson->traerTodos();
foreach ($usuarios as $usuario)
 {
   try
   {
     $usuarioExtraido = new Usuario($usuario['name'], $usuario['email'], $usuario['password'], $usuario['username'], $usuario['pais'], $usuario['id']);
     $db->guardarUsuario($usuarioExtraido);
   } catch (\PDOException $e)
   {
     echo $e->getMessage();
   }


}
