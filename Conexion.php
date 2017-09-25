<?php
$host='localhost';
$user='root';
$password='';
$baseDatos='centromedico';

$objConexion= new mysqli($host,$user,$password,$baseDatos);

if ($objConexion->connect_errno) {
echo "Error de Conexion a la Base de datos".$objConexion->connect_error;
exit();
}
else {
  echo "Conectados al Servidor y listos para utilizar la Base de Datos: ".$baseDatos;
}

 ?>
