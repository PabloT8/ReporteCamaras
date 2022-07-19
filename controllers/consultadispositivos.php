<?php 

include("conexion.php");
  $conexion = conexion();

$consulta = "SELECT * FROM dispositivo,ciudad where ciudadid=ciudadfk order by dispositivositio"; 

     $resultado = mysqli_query($conexion, $consulta);
     $array = mysqli_fetch_array($resultado);

 ?>