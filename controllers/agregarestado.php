<?php

session_start();   
 
date_default_timezone_set ( 'America/Tegucigalpa' ) ;

$estadorec = $_POST['estadorec'];
$estadopc=$_POST['estadopc'];
$estadoscratch=$_POST['estadoscratch'];
$estadomovilidad = $_POST['estadomovilidad'];
$estadoenfoque = $_POST['estadoenfoque'];
$estadovision = $_POST['estadovision'];
$estadoobservacion = $_POST['estadoobservacion'];
$dispositivo=$_POST['dispositivo'];

$id_reporte = $_POST['id_reporte'];
  
include("conexion.php");
  $conexion = conexion();

    $sql= "INSERT INTO estado(dispositivofk,reportefk,estadorec,estadopc,estadoscratch,estadomovilidad,estadoenfoque,estadovision,estadoobservacion) VALUES ('$dispositivo','$id_reporte','$estadorec','$estadopc','$estadoscratch','$estadomovilidad','$estadoenfoque','$estadovision','$estadoobservacion')";
    $resultado=mysqli_query($conexion, $sql);

     mysqli_close($conexion);

    header("Location: ../views/reporte.php#seccion2");
 
 ?>