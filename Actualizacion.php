<?php
require 'Conexion.php';

$objConexion=new mysqli($host,$user,$password,$baseDatos);

if ($objConexion->connect_errno) {
  echo "Erro de Conexion a la Base de Dtos".$objConexion->connect_error;
  exi();
}
$sql="update pacientes set PacFechaNacimiento='1951-06-25'where pacIdentificacion='34562'";
$resultado=$objConexion->query($sql);

if ($resultado)
echo "<br> <br> Se actualizo la Fecha de Nacimiento de Forma Correcta ";
else
echo "problemas al Actualizar";
$objConexion->close();
 ?>
