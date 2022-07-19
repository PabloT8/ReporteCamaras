<?php  
     
$dispositivos=$_GET["dispositivoid"];

include("conexion.php");
$conexion=conexion();
     
    $sql= "DELETE FROM dispositivo WHERE dispositivoid='$dispositivos'";

    $resultado=mysqli_query($conexion, $sql);

   header("Location: ../views/dispositivos.php");

mysqli_close($conexion);
    
 ?>


  
