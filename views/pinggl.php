<?php 
session_start();
if(!isset($_SESSION["username"]))
{
   header("location:../registro/login.php");
}

   
include("../controllers/conexion.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon"  href="../img/logo91.png">
    <title>Ping de Camaras de Gracias Lempira</title>

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

                <!-- End of Topbar -->


        
                <!-- Begin Page Content -->
                <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <!-- Begin Page Content -->
        <div class="container-fluid">

                    
                   <div>
                     <body>
                        <center><h1>Ping de Camaras de Gracias Lempira</h1></center>
    <table>
<?php 

    require_once "../controllers/conexion.php";
    $conexion=conexion();

    $sql="SELECT * FROM dispositivo,ciudad where ciudadid=ciudadfk and ciudadnombre='Gracias' order by dispositivositio";
    $result=mysqli_query($conexion,$sql);
            
?>
  <table class="table table-hover table-bordered">
    <thead>
        <tr style="text-align:center">
        <th>#</th>
        <th>Sitio</th>
        <th>Dispositivo</th>
        <th>Direccion</th>
        <th>IP</th>
        <th>Estado</th>
        <th>Ciudad</th>
    </thead>

<?php
$cont=0;
foreach ($result as $row) { ?> 
<tr style="text-align:center">
    <td><?php echo ++$cont; ?></td>
    <td><?php echo $row['dispositivositio']; ?></td>
    <td><?php echo $row['dispositivoid']; ?></td>
     <td><?php echo $row['dispositivodireccion']; ?></td>
    <td><?php echo $row['dispositivoip']; ?></td>
    
    <td><?php $iplist=[$row['dispositivoip']];
              $i=count($iplist);
              $port = 80; 
              $waitTimeoutInSeconds = 1;
              for ($j=0; $j<$i; $j++) { 
              $ip=$iplist[$j];
              if($fp = fsockopen($ip,$port,$errCode,$errStr,$waitTimeoutInSeconds)){
              
                $estado='EnLinea';
              echo "<a style=color:green>$estado</a>";
              $sql1="UPDATE dispositivo,ciudad set dispositivoping ='$estado' where ciudadid=ciudadfk and ciudadnombre='Gracias' and dispositivoip='$ip'";
              $result1=mysqli_query($conexion,$sql1);
              
               }
               else {
                $estado='FueraLinea';
                echo "<a style=color:red>$estado</a>";
               $sql1="UPDATE dispositivo,ciudad set dispositivoping ='$estado' where ciudadid=ciudadfk and ciudadnombre='Gracias' and dispositivoip='$ip'";
              $result1=mysqli_query($conexion,$sql1);
               } ;
                
              }

              ?></td>         
    <td><?php echo $row['ciudadnombre'];  ?></td>
    </tr>
    <?php }
?>
</table>
</div>
</div>
</div>
</body>  

                   </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           <!-- /.content-wrapper -->
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
