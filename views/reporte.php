<?php 
session_start();
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
  <title>Reporte de Camaras</title>


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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
          <div>
            <?php
            include ('../registro/helper.php');
            ?>
            

        <?php 
    include ("../controllers/consultaestado.php");
    ?>
    <script>
      var cadena = {
  "Santa Rosa de Copan": {
    "SR01": ["1-1-F1-SRC", "1-1-F2-SRC", "1-1-F3-SRC", "1-1-P1-SRC"],
    "SR02": ["2-1-F1-SRC", "2-1-F2-SRC", "2-1-F3-SRC", "2-1-P1-SRC"],
    "SR03": ["3-1-F1-SRC", "3-1-F2-SRC"], 
    "SR04": ["4-1-F1-SRC", "4-1-F2-SRC"],
    "SR05": ["5-1-F1-SRC", "5-1-F2-SRC", "5-1-P1-SRC"],
    "SR06": ["6-1-P1-SRC", "6-1-F1-SRC", "6-1-F2-SRC"],
    "SR07": ["7-1-F1-SRC", "7-1-F2-SRC", "7-1-P1-SRC"],
    "SR08": ["8-1-F1-SRC", "8-1-F2-SRC", "8-1-F3-SRC", "8-1-P1-SRC", "8-2-F1-SRC", "8-2-F2-SRC", "8-2-F3-SRC"],
    "SR09": ["9-1-F1-SRC", "9-1-F2-SRC","9-1-F3-SRC", "9-2-F1-SRC", "9-2-F2-SRC", "9-2-F3-SRC", "9-2-P1-SRC"], 
    "SR10": ["10-1-F1-SRC", "10-1-F2-SRC", "10-1-P1-SRC"],
    "SR11": ["11-1-P1-SRC", "11-2-F1-SRC", "11-2-F2-SRC"],
    "SR12": ["12-1-F1-SRC", "12-1-F2-SRC", "12-1-F3-SRC"],
    "SR13": ["13-1-L1-SRC", "13-1-L2-SRC",],
    "SR14": ["14-1-F1-SRC", "14-1-F2-SRC", "14-1-F3-SRC", "14-1-F4-SRC", "14-1-P1-SRC", "14-2-F1-SRC", "14-2-F2-SRC", "14-2-F3-SRC", "14-2-P1-SRC"],
    "SR15": ["15-1-F1-SRC", "15-1-F2-SRC", "15-1-F3-SRC", "15-1-F4-SRC"], 
    "SR16": ["16-1-F1-SRC", "16-1-F2-SRC", "16-1-F3-SRC", "16-1-P1-SRC"],
    "SR17": ["17-1-F1-SRC", "17-1-F2-SRC", "17-1-P1-SRC", "17-2-F1-SRC", "17-2-P1-SRC", "17-3-F1-SRC"],
    "SR18": ["18-1-F1-SRC", "18-1-F2-SRC", "18-1-P1-SRC", "18-2-P1-SRC", "18-3-F1-SRC", "18-3-F2-SRC", "18-3-P1-SRC","18-3-F3-SRC", "18-3-F4-SRC"],
    "SR19": ["19-1-F1-SRC", "19-1-F2-SRC", "19-1-F3-SRC", "19-1-P1-SRC"],
    "SR20": ["20-1-F1-SRC", "20-1-F2-SRC", "20-1-P1-SRC"],
    "SR21": ["21-1-F1-SRC", "21-1-F2-SRC", "21-1-F3-SRC"], 
    "SR22": ["22-1-F1-SRC", "22-1-F2-SRC", "22-1-F3-SRC"],
    "SR23": ["23-1-F1-SRC", "23-1-F2-SRC", "23-1-P1-SRC"],
    "SR24": ["24-1-F1-SRC", "24-2-F1-SRC", "24-2-F2-SRC"],
    "SR25": ["25-1-F1-SRC", "25-1-F2-SRC", "25-1-P1-SRC"],
    "SR26": ["26-1-F1-SRC", "26-1-F2-SRC", "26-1-F3-SRC", "26-1-F4-SRC"],
    "SR27": ["27-1-F1-SRC", "27-1-F2-SRC", "27-1-F3-SRC"],
    "SR28": ["28-1-F1-SRC", "28-1-F2-SRC", "28-1-F3-SRC", "28-1-P1-SRC"],
    "SR29": ["29-1-F1-SRC", "29-1-F2-SRC", "29-1-F3-SRC", "29-1-F4-SRC", "29-1-P1-SRC"],
    "SR30": ["30-1-P1-SRC", "30-1-F1-SRC", "30-1-F2-SRC", "30-1-F3-SRC"],
    "SR31": ["31-1-F1-SRC", "31-1-F2-SRC", "31-1-P1-SRC",]
  },

  "La Entrada": {
    "LEC01": ["1-1-F1-LEC", "1-1-F2-LEC"],
    "LEC02": ["2-1-F1-LEC", "2-1-F2-LEC"],
    "LEC03": ["3-1-F1-LEC", "3-1-F2-LEC"],
    "LEC04": ["4-1-P1-LEC"],
    "LEC05": ["5-1-P1-LEC"],
    "LEC06": ["6-1-F1-LEC", "6-1-F2-LEC", "6-1-F3-LEC"],
    "LEC07": ["7-1-F1-LEC", "7-1-F2-LEC"],
    "LEC08": ["8-1-F1-LEC", "8-1-F2-LEC"],
    "LEC09": ["9-1-P1-LEC"],
    "LEC10": ["10-1-P1-LEC"],
    "LEC11": ["11-1-P1-LEC"],
    "LEC12": ["12-1-F1-LEC", "12-1-F2-LEC",],
    "LEC13": ["11-1-P1-LEC"],
    "LEC14": ["14-1-F1-LEC", "14-1-F2-LEC"],
    "LEC15": ["15-1-P1-LEC"],
    "LEC16": ["16-1-F1-LEC", "16-1-F2-LEC",],
    "LEC17": ["17-1-F1-LEC", "17-1-F2-LEC"],
    "LEC18": ["18-1-P1-LEC"],
    "LEC19": ["19-1-P1-LEC"],
    "LEC20": ["20-1-F1-LEC", "20-1-F2-LEC"],
    "LEC21": ["21-1-F1-LEC", "21-1-F2-LEC"],
    "LEC22": ["22-1-P1-LEC", "22-1-F1-LEC",]


  },

  "Copan Ruinas": {
    "CR01": ["1-01-F1-CR", "1-01-F2-CR"],
    "CR02": ["2-01-F1-CR", "2-01-F2-CR"],
    "CR03": ["3-01-F1-CR", "3-01-F2-CR", "3-01-P1-CR"],
    "CR04": ["4-01-F1-CR", "4-01-F2-CR", "4-01-P1-CR"],
    "CR05": ["5-01-F1-CR", "5-01-F2-CR", "5-01-F3-CR"],
    "CR06": ["6-01-F1-CR", "6-01-F2-CR", "6-01-F3-CR"],
    "CR07": ["7-01-F1-CR", "7-01-F2-CR", "7-01-P1-CR"],
    "CR08": ["8-01-F1-CR", "8-01-F2-CR", "8-01-F3-CR", "8-01-P1-CR"],
    "CR09": ["9-01-F1-CR", "9-01-F2-CR"],
    "CR10": ["10-01-F1-CR", "10-01-F2-CR", "10-01-F3-CR", "10-01-F4-CR"],
    "CR11": ["11-01-P1-CR"],
    "CR12": ["12-01-F1-CR", "12-01-F2-CR", "12-01-F3-CR"]
  },
  "Gracias": {
    "GL01": ["1-1-L1-GL", "1-1-L2-GL"],
    "GL02": ["2-1-F1-GL"],
    "GL03": ["3-1-F1-GL", "3-1-F2-GL", "3-1-P1-GL"],
    "GL04": ["4-1-F1-GL", "4-1-P1-GL"],
    "GL05": ["5-1-F1-GL", "5-1-F2-GL"],
    "GL06": ["6-1-F1-GL", "6-1-F2-GL", "6-1-P1-GL"],
    "GL07": ["7-1-F1-GL", "7-1-F2-GL", "7-1-F3-GL", "7-1-F4-GL"],
    "GL08": ["8-1-P1-GL"],
    "GL09": ["9-1-F1-GL", "9-1-F2-GL", "9-1-F3-GL"],
    "GL10": ["10-1-F1-GL", "10-1-F2-GL", "10-1-P1-GL"],
    "GL11": ["11-1-F1-GL", "11-1-F2-GL"],
    "GL12": ["12-1-F1-GL", "12-1-F2-GL", "12-1-P1-GL"],
    "GL13": ["13-1-F1-GL", "13-1-F2-GL", "13-1-F3-GL"],
    "GL14": ["14-1-F1-GL", "14-1-F2-GL", "14-1-L2-GL", "14-1-L1-GL"],
    "GL15": ["15-1-F1-GL", "15-1-F2-GL", "15-1-F3-GL", "15-1-P1-GL", "15-2-F1-GL", "15-2-F2-GL", "15-2-F3-GL", "15-3-F1-GL", "15-3-F2-GL"],
    "GL16": ["16-1-F1-GL", "16-1-F2-GL", "16-1-P1-GL"],
    "GL17": ["17-1-F1-GL", "17-1-F2-GL", "17-1-P1-GL"],
    "GL18": ["18-1-F1-GL", "18-1-P1-GL"]
  }
}
      window.onload = function() {
        var ciudad = document.getElementById("ciudad");
        var sitio = document.getElementById("sitio");
        var dispositivo = document.getElementById("dispositivo");
        for (var x in cadena) {
          ciudad.options[ciudad.options.length] = new Option(x, x);
        }
        ciudad.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    dispositivo.length = 1;
    sitio.length = 1;
    //display correct values
    for (var y in cadena[this.value]) {
      sitio.options[sitio.options.length] = new Option(y, y);
    }
  }
  sitio.onchange = function() {
    //empty Chapters dropdown
    dispositivo.length = 1;
    //display correct values
    var z = cadena[ciudad.value][this.value];
    for (var i = 0; i < z.length; i++) {
      dispositivo.options[dispositivo.options.length] = new Option(z[i], z[i]);
    }
  }

}
</script>
</head> 

<body>
	<center><h1 id="seccion2">Reporte de Camaras</h1></center>
	   <form name="form1" id="form1" method="GET" action="../controllers/actualizarreporte.php">
	   <input type="hidden" type="number_format(number)" name="id_reporte" readonly="readonly" value="<?php  
    echo $_SESSION['id_reporte']?>" required></input> 

    <input  type="submit" value="Finalizado" class="btn btn-primary" >
 
  </form>
  <br>
  
  <form name="form1" id="form1" method="POST" action="../controllers/agregarestado.php">

    <select name="ciudad" id="ciudad" >
      <option value="" selected="selected">Ciudad</option>
    </select>

    <select name="sitio" id="sitio" >
      <option value="" selected="selected">Sitio</option>
    </select>

    <select name="dispositivo" id="dispositivo" >
      <option value="" selected="selected">Dispositivo</option>
    </select>

    <select name="estadorec" id="estadorec" >
      <option value="">REC</option>
      <option value="No">No</option>
      <option value="Si">Si</option>
    </select>

    <select name="estadopc" id="estadopc" >
      <option value="">P/C</option>
      <option value="No">No</option>
      <option value="Si">Si</option>
    </select>

    <select name="estadoscratch" id="estadoscratch" >
      <option value="">Scratch</option>
      <option value="No">No</option>
      <option value="Si">Si</option>
    </select>

    <select name="estadomovilidad" id="estadomovilidad" >
      <option value="">Sin/Mov</option>
      <option value="No">No</option>
      <option value="Si">Si</option>
    </select>

    <select name="estadoenfoque" id="estadoenfoque" >
      <option value="">Mal/Enf</option>
      <option value="No">No</option>
      <option value="Si">Si</option>
    </select>

    <select name="estadovision" id="estadovision" >
      <option value="">Vision/Obs</option>
      <option value="No">No</option>
      <option value="Si">Si</option>
    </select>

    <input type="text" name="estadoobservacion" id="estadoobservacion"  value="Observacion">

    <input type="submit" value="Agregar" class="btn btn-primary" >

    <button  class="btn btn-primary" onclick ="return open_new_window()" >Reporte</button>

    <script > 
      function open_new_window(){
        window.open('../pdf/reportegeneral.php', '_blank');
        return false;
    }
</script>

    <input type="hidden" type="number_format(number)" name="id_reporte" readonly="readonly" value="<?php  
    echo $_SESSION['id_reporte']?>" required></input>  
  </form>
  

<br>
  <table class="table table-hover table-bordered" >

  <thead>
    <tr>
      <th>#</th>
      <th>Sitio</th>
      <th>Dispositivo</th>
      <th>Estado</th>
      <th>REC</th>
      <th>P/C</th>
      <th>Scratch</th>
      <th>Sin/Mov</th>
      <th>Mal/Enf</th>
      <th>Vision/Obs</th>
      <th>Observacion</th>
      <th></th>
      <th></th>
    </tr>
  </thead>

  <?php
  $cont=0;
  foreach ($resultado as $row) { ?>
    <tr>
      <td><?php echo ++$cont; ?></td> 
      <td><?php echo $row['dispositivositio'] ?></td> 
      <td><?php echo $row['dispositivofk'] ?></td>
      <td bgcolor="<?php if($row['dispositivoping']=='FueraLinea') echo '#D52727'; else echo"#2471A3";?>"><?php echo $row['dispositivoping'] ?></td> 
      <td><?php echo $row['estadorec'] ?></td> 
      <td><?php echo $row['estadopc'] ?></td> 
      <td><?php echo $row['estadoscratch'] ?></td> 
      <td><?php echo $row['estadomovilidad'] ?></td>
      <td><?php echo $row['estadoenfoque'] ?></td> 
      <td><?php echo $row['estadovision'] ?></td> 
      <td><?php echo $row['estadoobservacion'] ?></td>
      <td><?php echo "<a href='actualizardispositivo.php?estadoid=".$row['estadoid']."''><button type='button' class = 'btn btn-warning fas fa-edit'></button></a></td>"?> 
      <td><?php echo "<a href='../controllers/eliminar.php?estadoid=".$row['estadoid']."''><button type='button' class = 'btn btn-danger fas fa-trash-alt'></button></a></td>"?>        
    </tr>
    <?php
  }  
  ?>
</table>
</div>

        </div>
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
