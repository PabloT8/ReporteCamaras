<?php

session_start();
if(!isset($_SESSION["username"])){
  header("location:../reigstro/login.php");
}

$ciudadnombre=$_POST['ciudadnombre'];
$dispositivoid=$_POST['dispositivoid'];
$dispositivositio=$_POST['dispositivositio'];
$dispositivodireccion=$_POST['dispositivodireccion'];
$dispositivotipo=$_POST['dispositivotipo'];
$dispositivoip=$_POST['dispositivoip'];

    $host_conexion="10.40.27.125";//Estamos estableciendo una conexion con la base de datos.
    $data_base_conexion="reportedv_db";//colocamos el nombre de la base de datos.
    $user_conexion="developer";//es el nombre de ususario en mysql.
    $pass_conexion="Developer911.";//la dejamos en balnco por no tenemos contrasena en le mysql.
    $conn = new PDO("mysql:dbname=".$data_base_conexion.";host=".$host_conexion,$user_conexion, $pass_conexion);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $conn->beginTransaction();

    try { 
	$sql= "INSERT INTO ciudad (ciudadnombre) VALUES (:ciudadnombre)";
      $result = $conn->prepare($sql);
     $result->bindValue(':ciudadnombre', $ciudadnombre, PDO::PARAM_STR);
     $result->execute();
     $lastId = $conn->lastInsertId();

      $sql=  "INSERT INTO dispositivo (ciudadfk, dispositivoid, dispositivositio, dispositivodireccion, dispositivotipo, dispositivoip) VALUES (:ciudadfk, :dispositivoid, :dispositivositio, :dispositivodireccion, :dispositivotipo, :dispositivoip)";
      $result = $conn->prepare($sql);
      $result->bindValue(':ciudadfk', $lastId, PDO::PARAM_INT);
      $result->bindValue(':dispositivoid', $dispositivoid, PDO::PARAM_STR);
      $result->bindValue(':dispositivositio', $dispositivositio, PDO::PARAM_STR);
      $result->bindValue(':dispositivodireccion', $dispositivodireccion, PDO::PARAM_STR);
      $result->bindValue(':dispositivotipo', $dispositivotipo, PDO::PARAM_STR);
      $result->bindValue(':dispositivoip', $dispositivoip, PDO::PARAM_STR);
      $result->execute();

      $conn->commit();
      header("Location:../views/dispositivos.php");
    } catch (PDOException $e) {
// si ocurre un error hacemos rollback para anular todos los insert
      $conn->rollback();
      echo $e->getMessage();;
    } 

  ?>
  
  