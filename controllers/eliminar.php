<?php  
     
$dispositivos=$_GET["estadoid"];

include("conexion.php");
$conexion=conexion();
     
    $sql= "DELETE FROM estado WHERE estadoid='$dispositivos'";

    $resultado=mysqli_query($conexion, $sql);

   header("Location: ../views/reporte.php");

mysqli_close($conexion);
    
 ?>


  
