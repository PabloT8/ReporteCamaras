  <?php

  $id_reporte=$_GET["id_reporte"];
  
 
  include("conexion.php");
  $conexion = conexion();

  $consulta="UPDATE reporte SET reporteestado= 'Finalizado' WHERE reporteid='$id_reporte'";

   $resultados=mysqli_query($conexion, $consulta);//con esta variable estamos llamando las dos variables la consulta y la conexion.

   if( $resultados==false){

    echo "Error en la consulta";

  }

  header("location:../index.php");

     mysqli_close($conexion);// De esta forma estamos cerrando la base de datos cundo terminanmos de trabajar.
     ?>

