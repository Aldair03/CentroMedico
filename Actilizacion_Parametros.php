<?php
require 'Conexion.php';

$objConexion=new mysqli($host,$user,$password,$baseDatos);

if ($objConexion->connect_errno) {

  echo "Error de Conexion a la Base de Datos ".$objConexion->connect_error;
  exit();
}

 ?>
