<?php 
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:../registro/login.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
   	<link rel="icon"  href="../img/logo91.png">


</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <center>
    <img src="../img/logo.png" />
    </center>

    <br>

    <section  id="main-site">
    <div  class="container py-4">
    <div style="background-color: #DC7633" class="col-6 offset-3 shadow py-3">
        
     <form action="../controllers/agregardisp.php" method="POST" align='center'>

     <h3>Agregar Nuevo Dispositivo</h3><br>

     <label>Ciudad</label><br>
     <select name='ciudadnombre'>
          <option value=""></option>
          <option value='Copan Ruinas'>Copan Ruinas</option>
          <option value='Gracias'>Gracias</option>
           <option value='La Entrada'>La Entrada</option>
          <option value='Santa Rosa de Copan'>Santa Rosa de Copan</option>
           </select><br><br>
           
           <label>Dispositivo</label><br>
     <input type="text" name="dispositivoid"><br><br>
           
           <label>Sitio</label><br>
     <input type="text" name="dispositivositio"><br><br>
     
     <label>Direccion</label><br>
     <input type="text" name="dispositivodireccion"><br><br>
     
     <label>Tipo de Camara</label><br>
     <select style="width:180px;" name='dispositivotipo'>
          <option value=""></option>
          <option value='FIJA'>FIJA</option>
          <option value='PTZ'>PTZ</option>
           <option value='LPR'>LPR</option>
           </select><br><br>
     
     <label>IP</label><br>
     <input type="text" name="dispositivoip"><br><br>

     <input class="btn btn-primary" type="submit" class='ACT' name="enviando" value="Agregar" class="btn btn-primary btn-block">

     </form>  
     </div>
     </div>
     </section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>