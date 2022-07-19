<?php 
session_start();
require_once "../controllers/conexion.php";
$conexion=conexion();

if(!isset($_SESSION["username"]))
{
   header("location:../registro/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <link rel="icon"  href="../img/logo91.png">
  <title>Resumen</title>



  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../img/logo91.png" alt="Sistema Nacional de Emergencias 911" height="100" width="100">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </a>

    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
      </a>
  </li>

  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img width="30" height="30" class="img-profile rounded-circle" src="../registro/assets/profile/perfi.png" alt="">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small "style="font-size: 16px;"> <?php echo "" . $_SESSION["username"] . "";?></span>
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="userDropdown">

<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    Cerrar Sesion
</a>
</div>
</li>

<li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
      <i class="fas fa-th-large"></i>
  </a>
</li>
</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <center><img src="../img/logo91.png" width="70" height="70" alt=""></center>
      <span style="font-size: 12px;" class="brand-text font-weight-light">SISTEMA NACIONAL  DE EMERGENCIAS 911</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="fas fa-home nav-icon"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-rss nav-icon"></i>
              <p>
                Ping de Camaras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="pingsrc.php" class="nav-link">
                  <i class="fas fa-landmark nav-icon"></i>
                  <p>Santa Rosa de Copan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pinglec.php" class="nav-link">
                  <i class="fa fa-road nav-icon"></i>
                  <p>La Entrada</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pingcr.php" class="nav-link">
                  <i class="fas fa-gopuram nav-icon"></i>
                  <p>Copan Ruinas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pinggl.php" class="nav-link">
                  <i class="fas fa-chess-rook nav-icon"></i>
                  <p>Gracias Lempira</p>
                </a>
              </li>
            </ul>



          </li>
         <li class="nav-item">
            <a href="reporte.php" class="nav-link">
                <i class="fas fa-file-video nav-icon"></i>
              <p>
                Reporte Camaras
              </p>
            </a>
          </li>
         
        <li class="nav-item">
            <a href="resumen.php" class="nav-link">
              <i class="fas fa-clipboard-list nav-icon"></i>
              <p>
                Resumen
              </p>
            </a>
          </li>

 

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-file-pdf nav-icon"></i>
              <p>
                Mas Reportes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                  <p>
                    REC
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="recsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="recgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="reccr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="reclec.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>La Entrada</p>
                    </a>
                  </li>

                  
                </ul>
              </li>
              
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    PC
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pcsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pcgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pccr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pclec.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>La Entrada</p>
                    </a>
                  </li>

                  
                </ul>
              </li>
              
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Scratch
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="scratchsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="scratchgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="scratchcr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="scratchlec.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>La Entrada</p>
                    </a>
                  </li>

                  
                </ul>
              </li>
              
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Sin Movilidad
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="movilidadsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="movilidadgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="movilidadcr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="movilidadlec.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>La Entrada</p>
                    </a>
                  </li>

                  
                </ul>
              </li>
              
            </ul>

			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Mal Enfoque
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="enfoquesrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="enfoquegl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="enfoquecr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="enfoquelec.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>La Entrada</p>
                    </a>
                  </li>

                  
                </ul>
              </li>
              
              

            </ul>


	
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Vision Obstruida
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="visionsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="visiongl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="visioncr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="visionlec.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>La Entrada</p>
                    </a>
                  </li>

                  
                </ul>
              </li>
              
            </ul>

                      </li>

              <li class="nav-item">
            <a href="ultimo.php" class="nav-link">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>
                Continuar Reporte
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="ultimoreporte.php" class="nav-link">
              <i class="fas fa-backward nav-icon"></i>
              <p>
                Reporte Anterior
              </p>
            </a>
          </li>
      </nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <!-- Begin Page Content -->
        <div class="container-fluid">
<button style='position:relative; float:right'  class="btn btn-primary" onclick ="return open_new_window()" >Generar Reporte</button>

    <script > 
      function open_new_window(){
        window.open('../pdf/reporteresumen.php', '_blank');
        return false;
    }
</script>
<!-- SECCION 1 -------------------------------------------------------------->
<section id="main-site">
    <div class="container py-4">
        <div class="col-6 offset-3 shadow py-3">
            <!-- Totales -------------------------------------------------------------->
            <div><?php 

            $sql1="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadid=ciudadfk";
            $result1=mysqli_query($conexion,$sql1);

            $sql2="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadid=ciudadfk";
            $result2=mysqli_query($conexion,$sql2);

        ?></div>
        
        
        <div style="text-align:center;">
            <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
                <thead><h3>Dispositivos Totales</h3>
                    <th>Estado</th>
                    <th>Total</th>
                    
                </thead>

                <?php

                foreach ($result1 as $row) { ?> 
                    <tr style="text-align:center">
                        <td style="color:green"><?php echo $row['dispositivoping']; ?></td>
                        <td ><?php echo $row['EnLinea']; ?></td>
                        <td><button onclick="location.href='totaleslinea.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button>
                        </tr>
                    <?php }
                    ?>
                    <?php

                    foreach ($result2 as $row) { ?> 
                        <tr style="text-align:center">
                            <td style="color:#EA3636"><?php echo  $row['dispositivoping']; ?></td>
                            <td ><?php echo $row['FueraLinea'];?></td>
                            <td><button onclick="location.href='totalesfuera.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
                        </tr>
                    <?php }
                    ?>
                </table>

            </div>

        </div>
    </div>
</section>
<br>


<!-- SECCION 2--------------------------------------------------------------------------------------------------->
<section  id="main-site">
    <div class="container py-4">
        <div class="col-6 offset-3 shadow py-3">
            <!-- Santa Rosa de Copan ---------------------------------------------------------------------------------------->
            <div><?php 

            $sql1="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk";
            $result1=mysqli_query($conexion,$sql1);

            $sql2="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk";
            $result2=mysqli_query($conexion,$sql2);

        ?></div>
        <div  style="text-align:center;">

            <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
                <thead><h3 style="text-align:center">Santa Rosa de Copan</h3>
                    <th style="text-align:center">Estado</th>
                    <th style="text-align:center">Total</th>
                </thead>

                <?php

                foreach ($result1 as $row) { ?> 
                    <tr style="text-align:center">
                        <td style="color:green"><?php echo $row['dispositivoping']; ?></td>
                        <td><?php echo $row['EnLinea']; ?></td>
                        <td><button onclick="location.href='srclinea.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
                    </tr>
                <?php }
                ?>
                <?php

                foreach ($result2 as $row) { ?> 
                    <tr style="text-align:center">
                        <td style="color:#EA3636;"><?php echo  $row['dispositivoping']; ?></td>
                        <td ><?php echo $row['FueraLinea'];?></td>
                        <td><button onclick="location.href='srcfuera.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>

        <br>






        <!-- Copan Ruinas -->
        <div><?php 

        $sql1="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='Copan Ruinas' and ciudadid=ciudadfk";
        $result1=mysqli_query($conexion,$sql1);

        $sql2="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='Copan Ruinas' and ciudadid=ciudadfk";
        $result2=mysqli_query($conexion,$sql2);

    ?></div>
    <div style="text-align:center;">
        <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
            <thead><h3>Copan Ruinas</h3>
                <th>Estado</th>
                <th>Total</th>
            </thead>

            <?php

            foreach ($result1 as $row) { ?> 
                <tr style="text-align:center">
                    <td style="color:green"><?php echo $row['dispositivoping']; ?></td>
                    <td ><?php echo $row['EnLinea']; ?></td>
                    <td><button onclick="location.href='crlinea.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
                </tr>
            <?php }
            ?>
            <?php

            foreach ($result2 as $row) { ?> 
                <tr style="text-align:center">
                    <td style="color:#EA3636"><?php echo  $row['dispositivoping']; ?></td>
                    <td ><?php echo $row['FueraLinea'];?></td>
                    <td><button onclick="location.href='crfuera.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
                </tr>
            <?php }
            ?>
        </table>
    </div>

    <br>






    <!-- La Entrada Copan -->

    <div><?php 

    $sql1="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='La Entrada' and ciudadid=ciudadfk";
    $result1=mysqli_query($conexion,$sql1);

    $sql2="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='La Entrada' and ciudadid=ciudadfk";
    $result2=mysqli_query($conexion,$sql2);

?></div>
<div style="text-align:center;">
    <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
        <thead><h3>La Entrada Copan</h3>
            <th>Estado</th>
            <th>Total</th>
        </thead>

        <?php

        foreach ($result1 as $row) { ?> 
            <tr style="text-align:center">
                <td style="color:green"><?php echo $row['dispositivoping']; ?></td>
                <td ><?php echo $row['EnLinea']; ?></td>
                <td><button onclick="location.href='leclinea.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
            </tr>
        <?php }
        ?>
        <?php

        foreach ($result2 as $row) { ?> 
            <tr style="text-align:center">
                <td style="color:#EA3636"><?php echo  $row['dispositivoping']; ?></td>
                <td ><?php echo $row['FueraLinea'];?></td>
                <td><button onclick="location.href='lecfuera.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
            </tr>
        <?php }
        ?>
    </table>
</div>

<br>





<!-- Gracias Lempira -->

<div><?php 

$sql1="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='Gracias' and ciudadid=ciudadfk";
$result1=mysqli_query($conexion,$sql1);

$sql2="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='Gracias' and ciudadid=ciudadfk";
$result2=mysqli_query($conexion,$sql2);

?></div>
<div style="text-align:center;">
    <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
        <thead><h3>Gracias Lempira</h3>
            <th>Estado</th>
            <th>Total</th>
        </thead>

        <?php

        foreach ($result1 as $row) { ?> 
            <tr style="text-align:center">
                <td style="color:green"><?php echo $row['dispositivoping']; ?></td>
                <td ><?php echo $row['EnLinea']; ?></td>
                <td><button onclick="location.href='gllinea.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
            </tr>
        <?php }
        ?>
        <?php

        foreach ($result2 as $row) { ?> 
            <tr style="text-align:center">
                <td style="color:#EA3636"><?php echo  $row['dispositivoping']; ?></td>
                <td ><?php echo $row['FueraLinea'];?></td>
                <td><button onclick="location.href='glfuera.php'" type="submit" name="verdispositivos" class="btn btn-primary">Ver</button></td>
            </tr>
        <?php }
        ?>
    </table>
</div>
</div>
</div>
</section>
<br>

<!-- SECCION 3 -------------------------------------------------------------->
<section id="main-site">
    <div class="container py-4">
        <div class="col-6 offset-3 shadow py-3">


            <!-- Tipo de Camara PTZ -->
            <div><?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Santa Rosa de Copan' and dispositivotipo='PTZ'";
            $result1=mysqli_query($conexion,$sql1);

        ?></div>
        <div style="text-align:center;">
            <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
                <thead><h3>Dispositivos Por Ciudad</h3>
                    <th>Ciudad</th>
                    <th>PTZ</th>
                    <th>FIJA</th>
                    <th>LPR</th>
                    <th>Total</th>
                </thead>

                <?php

                foreach ($result1 as $row) { ?> 
                    <tr style="text-align:center">
                        <td>SRC</td>
                        <td><?php echo $row['Total']; ?></td>

                    <?php }
                    ?>

                    <!-- Tipo de Camara FIJA -->
                    <?php 
                    $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Santa Rosa de Copan' and dispositivotipo='FIJA'";
                    $result1=mysqli_query($conexion,$sql1);

                    foreach ($result1 as $row) { ?> 
                        <td><?php echo $row['Total']; ?></td>
                    <?php }
                    ?>

                    <!-- Tipo de Camara LPR -->
                    <?php 
                    $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Santa Rosa de Copan' and dispositivotipo='LPR'";
                    $result1=mysqli_query($conexion,$sql1);

                    foreach ($result1 as $row) { ?> 
                        <td><?php echo $row['Total']; ?></td>
                    <?php }
                    ?>

                    <!-- Total de dispositivos -->
                    <?php 
                    $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Santa Rosa de Copan'";
                    $result1=mysqli_query($conexion,$sql1);

                    foreach ($result1 as $row) { ?> 
                        <td><?php echo $row['Total']; ?></td>
                    </tr>
                <?php }
                ?>

            </table>
        </div>
        <!-- TERMINA SRC -->







        <!-- Tipo de Camara PTZ CR -->
        <div><?php 
        $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Copan Ruinas' and dispositivotipo='PTZ'";
        $result1=mysqli_query($conexion,$sql1);

    ?></div>
    <div style="text-align:center;">
        <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
            <thead>
                <th style="color:#F0F3F4" bgcolor="#F0F3F4">Ciudad</th>
                <th style="color:#F0F3F4" bgcolor="#F0F3F4">PTZ</th>
                <th style="color:#F0F3F4" bgcolor="#F0F3F4">FIJA</th>
                <th style="color:#F0F3F4" bgcolor="#F0F3F4">LPR</th>
                <th style="color:#F0F3F4" bgcolor="#F0F3F4">Total</th>
            </thead>
            <?php

            foreach ($result1 as $row) { ?> 
                <tr style="text-align:center">
                    <td>CR</td>
                    <td><?php echo $row['Total']; ?></td>

                <?php }
                ?>

                <!-- Tipo de Camara FIJA CR-->
                <?php 
                $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Copan Ruinas' and dispositivotipo='FIJA'";
                $result1=mysqli_query($conexion,$sql1);

                foreach ($result1 as $row) { ?> 
                    <td><?php echo $row['Total']; ?></td>
                <?php }
                ?>

                <!-- Tipo de Camara LPR CR-->
                <?php 
                $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Copan Ruinas' and dispositivotipo='LPR'";
                $result1=mysqli_query($conexion,$sql1);

                foreach ($result1 as $row) { ?> 
                    <td><?php echo $row['Total']; ?></td>
                <?php }
                ?>

                <!-- Total de dispositivos CR-->
                <?php 
                $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Copan Ruinas'";
                $result1=mysqli_query($conexion,$sql1);

                foreach ($result1 as $row) { ?> 
                    <td><?php echo $row['Total']; ?></td>
                </tr>
            <?php }
            ?>

        </table>
    </div>
    <!-- TERMINA CR -->








    <!-- Tipo de Camara PTZ GL -->
    <div><?php 
    $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Gracias' and dispositivotipo='PTZ'";
    $result1=mysqli_query($conexion,$sql1);

?></div>
<div style="text-align:center;">
    <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
        <thead>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4"style="color:#F0F3F4" bgcolor="#F0F3F4">Ciudad</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4"style="color:#F0F3F4" bgcolor="#F0F3F4">PTZ</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4"style="color:#F0F3F4" bgcolor="#F0F3F4">FIJA</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4"style="color:#F0F3F4" bgcolor="#F0F3F4">LPR</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4"style="color:#F0F3F4" bgcolor="#F0F3F4">Total</th>
        </thead>
        <?php

        foreach ($result1 as $row) { ?> 
            <tr style="text-align:center">
                <td>GL</td>
                <td><?php echo $row['Total']; ?></td>

            <?php }
            ?>

            <!-- Tipo de Camara FIJA GL-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Gracias' and dispositivotipo='FIJA'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            <?php }
            ?>

            <!-- Tipo de Camara LPR GL-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Gracias' and dispositivotipo='LPR'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            <?php }
            ?>

            <!-- Total de dispositivos GL-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='Gracias'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            </tr>
        <?php }
        ?>

    </table>
</div>
<!-- TERMINA GL -->







<!-- Tipo de Camara PTZ LEC -->
<div><?php 
$sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='La Entrada' and dispositivotipo='PTZ'";
$result1=mysqli_query($conexion,$sql1);

?></div>
<div style="text-align:center;">
    <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
        <thead>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">Ciudad</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">PTZ</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">FIJA</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">LPR</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">Total</th>
        </thead>
        <?php

        foreach ($result1 as $row) { ?> 
            <tr style="text-align:center">
                <td>LEC</td>
                <td><?php echo $row['Total']; ?></td>

            <?php }
            ?>

            <!-- Tipo de Camara FIJA LEC-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='La Entrada' and dispositivotipo='FIJA'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            <?php }
            ?>

            <!-- Tipo de Camara LPR GL-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='La Entrada' and dispositivotipo='LPR'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            <?php }
            ?>

            <!-- Total de dispositivos LEC-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and ciudadnombre='La Entrada'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            </tr>
        <?php }
        ?>

    </table>
</div>
<!-- TERMINA LEC -->








<!-- Tipo de Camara PTZ TOTAL -->
<div><?php 
$sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and dispositivotipo='PTZ'";
$result1=mysqli_query($conexion,$sql1);

?></div>
<div style="text-align:center;">
    <table WIDTH="500" class="table-bordered" style="margin: 0 auto;">
        <thead>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">Ciudad</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">PTZ</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">FIJA</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">LPR</th>
            <th style="color:#F0F3F4" bgcolor="#F0F3F4">Total</th>
        </thead>
        <?php

        foreach ($result1 as $row) { ?> 
            <tr style="text-align:center">
                <td><?php echo "Total" ?></td>
                <td><?php echo $row['Total']; ?></td>

            <?php }
            ?>

            <!-- Tipo de Camara FIJA TOTAL-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and dispositivotipo='FIJA'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            <?php }
            ?>

            <!-- Tipo de Camara LPR TOTAL-->
            <?php 
            $sql1="SELECT dispositivotipo,ciudadnombre,count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk and dispositivotipo='LPR'";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            <?php }
            ?>

            <!-- Total de dispositivos LEC TOTAL-->
            <?php 
            $sql1="SELECT count(dispositivotipo) as Total FROM ciudad,dispositivo where ciudadid=ciudadfk";
            $result1=mysqli_query($conexion,$sql1);

            foreach ($result1 as $row) { ?> 
                <td><?php echo $row['Total']; ?></td>
            </tr>
        <?php }
        ?>

    </table>
</div>

</div>
</div>
</section>
<br>
</div>

</div>
</div>
<!-- TERMINA TOTAL -->

<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong><center>Sistema Nacional de Emergencias 911 &copy;</center></strong>
</footer>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Cerrar sesion?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Seleccione cerrar sesion para finalizar su sesion</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="../registro/logout.php">Salir</a>
        </div>
    </div>
</div>
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
