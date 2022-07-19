  <?php
  
  
  $dispositivositio=$_GET['dispositivositio'];
  $dispositivoid= $_GET['dispositivoid'];
  $dispositivodireccion=$_GET['dispositivodireccion'];
  $dispositivotipo=$_GET['dispositivotipo'];
  $dispositivoip=$_GET['dispositivoip'];
  $id=$_GET['id'];

  include("conexion.php");
  $conexion = conexion();

  $consulta="UPDATE dispositivo SET dispositivositio='$dispositivositio', dispositivodireccion='$dispositivodireccion', dispositivotipo='$dispositivotipo', dispositivoip='$dispositivoip' WHERE ciudadfk='$id' and dispositivoid='$dispositivoid'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.

   if( $resultados==false){

    echo "Error en la consulta";

  }

  header("location:../views/dispositivos.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

