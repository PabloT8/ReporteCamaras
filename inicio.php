<?php 
session_start();
require_once "controllers/conexion.php";
$conexion=conexion();

if(!isset($_SESSION["username"]))
{
    header("location:registro/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <link rel="icon"  href="img/logo91.png">
  <title>Sistema Nacional de Emergencias 911</title>


 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/logo91.png" alt="Sistema Nacional de Emergencias 911" height="100" width="100">
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
                        <img width="30" height="30" class="img-profile rounded-circle" src="registro/assets/profile/perfi.png" alt="">
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
    <a href="index.php" class="brand-link">
      <center><img src="img/logo91.png" width="70" height="70" alt=""></center>
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
            <a href="index.php" class="nav-link">
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
                <a href="views/pingsrc.php" class="nav-link">
                  <i class="fas fa-landmark nav-icon"></i>
                  <p>Santa Rosa de Copan</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="views/pinglec.php" class="nav-link">
                  <i class="fa fa-road nav-icon"></i>
                  <p>La Entrada</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="views/pingcr.php" class="nav-link">
                  <i class="fas fa-gopuram nav-icon"></i>
                  <p>Copan Ruinas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="views/pinggl.php" class="nav-link">
                  <i class="fas fa-chess-rook nav-icon"></i>
                  <p>Gracias Lempira</p>
                </a>
              </li>
            </ul>



          </li>
         <li class="nav-item">
            <a href="views/reporte.php" class="nav-link">
                <i class="fas fa-file-video nav-icon"></i>
              <p>
                Reporte Camaras
              </p>
            </a>
          </li>
         
        <li class="nav-item">
            <a href="views/resumen.php" class="nav-link">
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
                    <a href="views/recsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/recgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/reccr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/reclec.php" class="nav-link">
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
                    <a href="views/pcsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/pcgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/pccr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/pclec.php" class="nav-link">
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
                    <a href="views/scratchsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/scratchgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/scratchcr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/scratchlec.php" class="nav-link">
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
                    <a href="views/movilidadsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/movilidadgl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/movilidadcr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/movilidadlec.php" class="nav-link">
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
                    <a href="views/enfoquesrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/enfoquegl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/enfoquecr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/enfoquelec.php" class="nav-link">
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
                    <a href="views/visionsrc.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Santa Rosa de Copan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/visiongl.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Gracias</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/visioncr.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Copan Ruinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="views/visionlec.php" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>La Entrada</p>
                    </a>
                  </li>

                  
                </ul>
              </li>
              
            </ul>

                      </li>

              <li class="nav-item">
            <a href="views/ultimo.php" class="nav-link">
              <i class="fas fa-file-alt nav-icon"></i>
              <p>
                Continuar Reporte
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="views/ultimoreporte.php" class="nav-link">
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

  <center>
  <section id="main-site">
              <div class="container py-3">
                <div class="row">
                  <div class="col-3 offset-4 shadow py-3">
                    <div class="upload-profile-image d-flex justify-content-center pb-5">
                      <div class="text-center">
                        <br>
                       <form name="form1" method="POST" action="controllers/agregarreporte.php" >
                        
                         <label>Fecha:</label>
                         <input type="date" name="reportefecha" class="form-control" readonly="readonly" value="<?php date_default_timezone_set ( 'America/Tegucigalpa' ) ; echo date("Y-m-d");?>" >
                       
                         <label>Tecnico:</label>
                         <input  type="text" name="reporteusuario" class="form-control" readonly = "readonly" value=" <?php echo "" . $_SESSION["username"] . "";?>">
                      
                       
                        <label>Numero de Grupo:</label>
                        <br>
                        <select name="reportegrupo" id="reportegrupo" required="true">
                          <option value=""></option>
                          <option value="Grupo#1">Grupo#1</option>
                          <option value="Grupo#2">Grupo#2</option>
                          <option value="Grupo#3">Grupo#3</option>
                          <option value="Grupo#4">Grupo#4</option>
                          <option value="Grupo#5">Grupo#5</option>
                        </select>
                        <br>
                        <label>Turno:</label>
                        <br>
                        <select name="reporteturno" id="reporteturno" required="true">
                          <option value=""></option>
                          <option value="Turno A">Turno A</option>
                          <option value="Turno B">Turno B</option>
                          <option value="Turno C">Turno C</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit"  name="enviar" id="enviar" value="Nuevo Reporte" class="btn btn-primary">
                      </form>
                    </div>

                  </div>
                </div>
              </div>
            </section>
  </center>
  
  </div>
</div>
</div>


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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
