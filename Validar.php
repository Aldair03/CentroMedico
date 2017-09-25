<?php
extract($_REQUEST);
require "Conexion.php";
$odjConexion= new mysqli($Shost,$user,$password,$baseDatos);

if ($objConexion->connect_errno) {
  echo "Error de conexion a la Base de Datos",$objConexion->connect_error;
  exit();
}
$sql="INSERT into pacientes(pacIdentificacion,pacNombre,paApellido,pacFechaNacimiento,PacSexo)
values('$_REQUEST[pacIdentificacion]','$_REQUEST[pacNombre]','$_REQUEST[paApellido]',
'$_REQUEST[pacFechaNacimiento]','$_REQUEST[PacSexo]')";

if ($objConexion->query($sql))
header("location:Formulario.php?pag=insertarPaciente6msj=1");
else
header("location:Formulario.php?pag=insertarPaciente6msj=2");

 ?>
