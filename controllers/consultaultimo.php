<?php 

$host_conexion="10.40.27.125";
$user_conexion="developer";
$pass_conexion="Developer911.";
$data_base_conexion="reportedv_db";

$conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion,$data_base_conexion);

  $username = $_SESSION["username"];
  date_default_timezone_set ( 'America/Tegucigalpa' );
  $hoy = date("Y-m-d");

$consulta = "SELECT * FROM estado,dispositivo,reporte WHERE reporteid=reportefk and dispositivoid=dispositivofk and reporteusuario like '%$username%' and reportefecha='$hoy' order by dispositivositio"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>