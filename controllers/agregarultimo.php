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
 
$host_conexion="10.40.27.125";
$user_conexion="developer";
$pass_conexion="Developer911.";
$data_base_conexion="reportedv_db";

$conexion=mysqli_connect($host_conexion,$user_conexion,$pass_conexion,$data_base_conexion);

    $sql= "INSERT INTO estado(dispositivofk,reportefk,estadorec,estadopc,estadoscratch,estadomovilidad,estadoenfoque,estadovision,estadoobservacion) VALUES ('$dispositivo','$id_reporte','$estadorec','$estadopc','$estadoscratch','$estadomovilidad','$estadoenfoque','$estadovision','$estadoobservacion')";
    $resultado=mysqli_query($conexion, $sql);

     mysqli_close($conexion);

    header("Location: ../views/ultimo.php");

 ?>