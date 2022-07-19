<?php 

include("conexion.php");
  $conexion = conexion();

$ACT= $_GET['reporteid'];

$consulta = "SELECT * FROM estado,dispositivo,reporte WHERE reporteid= '$ACT' and dispositivoid=dispositivofk and reporteid=reportefk order by dispositivositio"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>