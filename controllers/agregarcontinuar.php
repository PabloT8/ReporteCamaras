<?php

session_start();   
 
date_default_timezone_set ( 'America/Tegucigalpa' ) ;

$reporteid= $_POST['reporteid'];
$estadorec = $_POST['estadorec'];
$estadopc=$_POST['estadopc'];
$estadoscratch=$_POST['estadoscratch'];
$estadomovilidad = $_POST['estadomovilidad'];
$estadoenfoque = $_POST['estadoenfoque'];
$estadovision = $_POST['estadovision'];
$estadoobservacion = $_POST['estadoobservacion'];
$dispositivo=$_POST['dispositivo'];

//$ACT= $_GET['reporteid'];
//$id_reporte = $_POST['id_reporte'];

include("conexion.php");
  $conexion = conexion();
 
    $sql= "INSERT INTO estado(dispositivofk,reportefk,estadorec,estadopc,estadoscratch,estadomovilidad,estadoenfoque,estadovision,estadoobservacion) VALUES ('$dispositivo','$reporteid','$estadorec','$estadopc','$estadoscratch','$estadomovilidad','$estadoenfoque','$estadovision','$estadoobservacion')";
    $resultado=mysqli_query($conexion, $sql);

     mysqli_close($conexion);

    header("Location: ../views/ultimo.php");
 
 ?>