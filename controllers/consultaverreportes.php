<?php 

include("conexion.php");
  $conexion = conexion();

$consulta = "SELECT * FROM reporte order by reporteid DESC"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>

  