<?php  
session_start();

 
date_default_timezone_set ( 'America/Tegucigalpa' ) ;
$reportegrupo=$_POST['reportegrupo'];
$reporteturno=$_POST['reporteturno'];
$reportefecha=$_POST['reportefecha'];
$reporteusuario=$_POST['reporteusuario'];

$_SESSION['reporteusuario'] = $_POST['reporteusuario'];
$_SESSION['reportegrupo'] = $_POST['reportegrupo'];
$_SESSION['reporteturno'] = $_POST['reporteturno'];

$usuario=$_SESSION['username'];

   include("conexion.php");

  $conexion=conexion();
 
    mysqli_set_charset($conexion,"utf8");

     $sql= "INSERT INTO reporte ( reporteusuario, reportefecha,  reportegrupo, reporteturno) VALUES ('$reporteusuario' ,'$reportefecha', '$reportegrupo', '$reporteturno')"; 

    $resultado=mysqli_query($conexion, $sql);

    $_SESSION['id_reporte'] = mysqli_insert_id($conexion);
  
   // $resultadoID=mysqli_query($conexion,$sql2);

     mysqli_close($conexion);

    // if ($resultadoID==true) {
      // echo "Exito en la consulta";
    // }

    if ($resultado==false) {
       echo "Error en la consulta";
     }

      header("Location: ../views/reporte.php");

 ?>