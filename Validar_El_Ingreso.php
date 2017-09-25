<?php
session_start();
extract($_REQUEST)
require 'Conexion.php';
$pass=md5($_REQUEST['pass']);
$login=$_REQUEST['Login'];

$objConexion=Conectarse();
$sql="select * form usuarios where usuLogin = '$login' and usuPassword = '$Pass'";
$Resultado=$objConexion->query($sql);
$existe=$resultado->num_rows;

if ($existe==1) {
$usuario=$resultado->fetch_object();
$_Session['user']=$usuario->usuLogin;
header("location")

}
 ?>
