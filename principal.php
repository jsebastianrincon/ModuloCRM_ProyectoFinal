<?php
include("conlead.php");
session_start();

if (!isset($_SESSION["id_usuario"])) {
  header("../../index.php");
  echo '<script language="javascript">confirm("Sesión Finalizada por Inactividad");
    window.location.href="index.php"</script>';
}
//Validacion variables de session

$tipo_usuario = $_SESSION['tipo_usuario'];
//echo $tipo_usuario;
$id_usuario = $_SESSION['id_usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Juan Sebastian">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="viewer"></div>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-friends"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CRM Movip S.A.S</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="principal">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <?php if ($tipo_usuario == 1) { ?>
        <!-- Nav Item -Clientes -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-friends"></i>
            <span>Clientes</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="gestionarclientes">Gestion de Clientes</a>
            </div>
          </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-headset"></i>
            <span>Leads</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="AñadirLead">Añadir Leads</a>
              <a class="collapse-item" href="GestionaLead">Gestionar Leads</a>
              <a class="collapse-item" href="Reuniones">Programar Reuniones</a>
              <a class="collapse-item" href="Historial">Historial de Contactos</a>
            </div>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class=" fas fa-cart-plus"></i></i>
            <span>Ventas</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="propuestas">Añadir Propuesta</a>
              <a class="collapse-item" href="gestionaventas">Gestionar Ventas</a>
            </div>
          </div>
        </li>
        <!-- Nav Item - Charts -->
        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="reportes">
            <i class="fas fa-fw fa-table"></i>
            <span>Reportes</span></a>
        </li>
      <?php } ?>
      <?php if ($tipo_usuario == 2) { ?>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="proyectos">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Proyectos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="reuniones" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-headset"></i>
            <span>Reuniones</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="Historial">Historial de Contactos</a>
            </div>
        </li>
        <!-- Nav Item - Tables -->
      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <?php
                require "conexion.php";
                $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
                $result = mysqli_query($mysqli, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                  echo "<a class='dropdown-item' href='verperfil?id=$mostrar[id_usuario] '>
                  <i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i>
                  Perfil
                </a>";
                }
                ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div>
            <?php

            $sql = "SELECT * FROM  usuarios where id_usuario = $id_usuario";
            $result = mysqli_query($conexion2, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
              echo "<h1 class='h3 mb-0 text-gray-800'>Bienvenido al panel de $mostrar[usuario]</h1> ";
            }
            echo "<br>";
            echo "<br>";
            ?>
          </div>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <div>
          </div>
          <!-- Content Row -->
          <div class="row">
            <?php if ($tipo_usuario == 1) { ?>
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-2 col-md-6 mb-5">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Leads Actuales</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $db_name = "crmpry";
                          $con = mysqli_connect($servername, $username, $password, $db_name);

                          $sql = "SELECT count(id_lead) AS TOTAL FROM leads WHERE estado_lead = 0 ";
                          $resultado = mysqli_query($con, $sql);
                          $values = mysqli_fetch_assoc($resultado);
                          $num_rows = $values['TOTAL'];
                          echo $num_rows;
                          ?>
                          <?php
                          ?>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-5">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ganancias Actuales</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $db_name = "crmpry";
                          $con = mysqli_connect($servername, $username, $password, $db_name);

                          $iva = '0.19';
                          $sql = "SELECT SUM((costo_requerimiento * tiempo_requerimiento)+(costo_requerimiento * tiempo_requerimiento*$iva)) as total_costos FROM requerimientos_proyectos";

                          $resultado = mysqli_query($con, $sql);
                          $values = mysqli_fetch_assoc($resultado);
                          $num_rows = $values['total_costos'];
                          $costos = number_format($num_rows);
                          echo '$', $costos;
                          ?>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-2 col-md-6 mb-5">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $db_name = "crmpry";
                          $con = mysqli_connect($servername, $username, $password, $db_name);

                          $sql = "SELECT count(id_lead) AS TOTAL FROM leads WHERE estado_lead = 1 && id_lead <> 1  ";
                          $resultado = mysqli_query($con, $sql);
                          $values = mysqli_fetch_assoc($resultado);
                          $num_rows = $values['TOTAL'];
                          echo $num_rows;
                          ?>
                          <?php
                          ?>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-2 col-md-6 mb-5">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Proyectos</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $db_name = "crmpry";
                              $con = mysqli_connect($servername, $username, $password, $db_name);

                              $sql = "SELECT count(id_proyecto) AS TOTAL FROM proyectos";
                              $resultado = mysqli_query($con, $sql);
                              $values = mysqli_fetch_assoc($resultado);
                              $num_rows = $values['TOTAL'];
                              echo $num_rows;
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Pending Requests Card Example -->
              <div class="col-xl-2 col-md-6 mb-5">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Reuniones Pendientes</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $db_name = "crmpry";
                          $con = mysqli_connect($servername, $username, $password, $db_name);

                          $sql = "SELECT count(id_reunion) AS TOTAL FROM reuniones WHERE fecha_reunion > CURDATE()  ";
                          $resultado = mysqli_query($con, $sql);
                          $values = mysqli_fetch_assoc($resultado);
                          $num_rows = $values['TOTAL'];
                          echo $num_rows;
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $conteoA = 'SELECT COUNT(id_lead) AS Leads FROM leads WHERE estado_lead = 0 AND id_lead >1 ';
              $totalA = mysqli_query($conexion2, $conteoA);
              $rowsA = implode(mysqli_fetch_array($totalA));
              echo "<br>";
              echo "<br>";

              $conteoB = 'SELECT COUNT(id_lead) AS Clientes FROM leads WHERE estado_lead = 1 AND id_lead >1';
              $totalB = mysqli_query($conexion2, $conteoB);
              $final = $totalB;
              $rowsB = implode(mysqli_fetch_array($totalB));

              ?>
              <!-- script para funcionamiento de la grafica -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
              <div style="width:90%;float:left;">
                <h4>
                  <center>ESTADISTICAS PERSONAL REGISTRADO</center>
                </h4>
                <canvas id="nombreGrafica"></canvas>
              </div>
              <?php
              echo "
                <script>
                    var ctx = document.getElementById('nombreGrafica').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type:'pie',   /// tipo de gráfica (pie), (bar),  (line)
                        data:{
                            labels:['Leads','Clientes'],
                            datasets:[{
                                label:'Encabezado ', /*titulo principal*/
                                data:['$rowsA','$rowsB'],  /*imprime los datos o variables a imprimir en las columnas*/
                                backgroundColor:[ /*Colores para la grafica, se puede mandar variable de color programado*/
                                        'red',
                                        'blue'
                                ],
                                borderWidth:2, /*se le da color del borde de la gráfica o alrededor de la grafica*/
                                borderColor: '#777',
                                hoverBorderWidth:4,
                                hoverBorderColor: 'yellow'
                            }]
                        },
                        options:{
                            scales:{
                                yAxes:[{
                                    ticks:{
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>
</body>
</html>
";
              ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php if ($tipo_usuario == 2) { ?>
  </div>
  </div>
  </div>
<?php } ?>
<!-- Content Row -->
<div class="row">
  <!-- Content Column -->
  <div class="col-lg-6 mb-4">

    <body>
    </body>
  </div>
</div>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Desea Finaliza la sesion actual?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="index">Cerrar Sesion</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="../vendor/chart.js/Chart.js"></script>

</body>

</html>