<?php 

include("conexion.php");
  $conexion = conexion();

  $username = $_SESSION["username"];
  $id_reporte=$_SESSION["id_reporte"];

$consulta = "SELECT * FROM estado,dispositivo WHERE reportefk = '$id_reporte' and dispositivoid=dispositivofk order by dispositivositio"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>