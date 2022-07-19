	<?php

  $username = $_SESSION["username"];
  $id_reporte=$_SESSION["id_reporte"];
  
  $dispositivos=$_GET["dispositivoid"];
  $estadorec=$_GET["estadorec"];
  $estadopc=$_GET["estadopc"];
  $estadoscratch=$_GET["estadoscratch"];
  $estadomovilidad=$_GET["estadomovilidad"];
  $estadoenfoque=$_GET['estadoenfoque'];
  $estadovision=$_GET["estadovision"];
  $estadoobservacion=$_GET['estadoobservacion'];
  $id=$_GET['id'];

  include("conexion.php");
  $conexion = conexion();

  $consulta="UPDATE estado SET estadorec='$estadorec', estadopc='$estadopc', estadoscratch='$estadoscratch', estadomovilidad='$estadomovilidad', estadoenfoque='$estadoenfoque', estadovision= '$estadovision', estadoobservacion= '$estadoobservacion' WHERE dispositivofk='$id'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.

   if( $resultados==false){

    echo "Error en la consulta";

  }

  header("location:../views/reporte.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

