<?php
include("conlead.php");
session_start();

if (!isset($_SESSION['id_usuario'])) {
  header("Location: index.php");
}
//Validacion variables de session
$tipo_usuario = $_SESSION['tipo_usuario'];
//echo $tipo_usuario;
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Juan Sebastian">

  <title>Ver Proyecto</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
      <li class="nav-item inactive">
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
        <li class="nav-item inactive">
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
        <li class="nav-item active">
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
        <li class="nav-item">
          <a class="nav-link" href="reportes.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Reportes</span></a>
        </li>
      <?php } ?>
      <?php if ($tipo_usuario == 2) { ?>
        <li class="nav-item active">
          <a class="nav-link" href="proyectos">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Proyectos</span></a>
        </li>
        <li class="nav-item">
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
      <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Modificar Informacion
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <?php
        require "conexion.php";
        $sql = "SELECT * FROM usuarios WHERE id_usuario = id_usuario";
        $result = mysqli_query($mysqli, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
          $id_usuario = $mostrar['id_usuario'];
        }
        if ($id_usuario != '2') {
          if ($tipo_usuario != '1') {
            echo "<div class='container-fluid'>
                    <a href='proyectos'>
                      <button type='button' class='btn btn-sm btn-primary'>
                        <i class='fas fa-arrow-left'></i></i>
                      </button>
                    </a>
                  </div>";
          } else {
            echo "<div class='container-fluid'>
                    <a href='gestionaventas'>
                      <button type='button' class='btn btn-sm btn-primary'>
                        <i class='fas fa-arrow-left'></i></i>
                      </button>
                    </a>
                  </div>
                  <br>";
          }
        }
        ?>
        <!-- Titulo Gestion de leads -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <div class="container p-8">
            <h1 class="h3 mb-0 text-gray-800">Detalles De Proyecto</h1>
          </div>
        </div>
        <div>
          <div>
          </div>
        </div>
        <!-- Gestion de leads -->
        <fieldset>
          <div class="container p-8">
            <div class="group">
              <div class="card card-body">
                <div class="form-group" id="responsive-form">
                  <fieldset>
                    <div class="col md-8 col md-offset-2">
                    </div>
                    <div class="card-header py-3">
                      <?php

                      $sql = "SELECT * FROM crmpry.proyectos WHERE id_proyecto=$id ";
                      $result = mysqli_query($conexion2, $sql);
                      while ($mostrar = mysqli_fetch_array($result)) {
                        //Impresion tabla
                        echo "<b>Codigo Proyecto:</b>";
                        echo $mostrar['codigo_proyecto'];
                        echo '<br>';
                        echo "<b>Tema Proyecto:</b>";
                        echo $mostrar['tema_proyecto'];
                        echo '<br>';
                        echo "<b>Nombre Cliente:</b>";
                        echo $mostrar['cliente_proyecto'];
                        echo '<br>';
                        echo "<b>Fecha Inicio:    </b>";
                        echo $mostrar['fecha_ini_proyecto'];
                        echo '<br>';
                        echo "<b>Fecha Fin: </b>";
                        echo $mostrar['fecha_fin_proyecto'];
                        echo '<br>';
                        echo "<b>Estado:</b> ";
                        if ($mostrar['estado_proyecto'] = '2') {
                          echo 'Activo';
                        }
                        echo '<br>';
                        echo "<b>Descripcion:</b> ";
                        echo $mostrar['descripcion_proyecto'];
                        echo "</td>";
                      }
                      ?>
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div>
            <div class="container p-8">
              <h1 class="h3 mb-0 text-gray-800">Requerimientos</h1>
              <div class="container p-8">
                <div class="group">
                  <div class="card card-body">
                    <div class="form-group" id="responsive-form">
                      <fieldset>
                        <div class="col md-8 col md-offset-2">
                        </div>
                        <div class="card-header py-3">
                          <?php
                          $sql = "SELECT * FROM requerimientos_proyectos WHERE id_proyecto = $id ";
                          $result = mysqli_query($conexion2, $sql);
                          while ($mostrar = mysqli_fetch_array($result)) {
                            //Impresion tabla
                            echo '<br>';
                            echo "<b>Nombre Requerimiento: </b>";
                            echo $mostrar['nombre_requerimiento'];
                            echo '<br>';
                            echo "<b>Descripcion Requerimiento:</b> ";
                            echo $mostrar['descripcion_requerimiento'];
                            echo '<br>';
                            echo "<b>Tiempo Requerimiento:</b> ";
                            echo $mostrar['tiempo_requerimiento'],  '  Hora(s)';
                            echo '<br>';
                            echo "<b>Costo Requimiento:</b> ", "$ ";
                            echo number_format($mostrar['costo_requerimiento']);
                            echo '<br>';
                          }
                          echo '<br>';
                          $sql_total = "SELECT SUM(costo_requerimiento * tiempo_requerimiento) as total from requerimientos_proyectos WHERE id_proyecto =$id ";
                          $sql_total_tiempo = "SELECT SUM(tiempo_requerimiento) as total_tiempo from requerimientos_proyectos WHERE id_proyecto =$id ";
                          $total_tiempo = mysqli_query($conexion2, $sql_total_tiempo);
                          $rows_tiempo = mysqli_fetch_array($total_tiempo);
                          echo "<b>Tiempo Total Proyecto:</b> " . $rows_tiempo['total_tiempo'], ' Horas';
                          echo '<br>';
                          $total = mysqli_query($conexion2, $sql_total);

                          $rows = mysqli_fetch_array($total);
                          echo "<b>Costo Parcial Proyecto: $ </b>" . number_format($rows['total']);
                          echo "<br>";
                          echo "<b>IVA</b> 19%";
                          if (!$total) {
                            var_dump(mysqli_error($conexion2));
                            exit;
                          }
                          echo '<br>';
                          $iva = '0.19';
                          $sql_total_proyecto = "SELECT SUM((costo_requerimiento * tiempo_requerimiento)* $iva) as total_proyecto from requerimientos_proyectos WHERE id_proyecto = $id";
                          $total_proyecto = mysqli_query($conexion2, $sql_total_proyecto);

                          $rows_tiempo = mysqli_fetch_array($total_proyecto);
                          $prueba = number_format($rows_tiempo[0] + $rows['total']);

                          echo "<b>Total Proyecto:</b> $ " . $prueba;
                          echo '<br>';
                          echo '<br>';
                          ?>
                        </div>
                    </div>
                    <?php
                    $sql = "SELECT * FROM proyectos WHERE id_proyecto = $id ";
                    $result = mysqli_query($conexion2, $sql);
                    while ($mostrar = mysqli_fetch_array($result)) {
                      echo "<colspan='24'><div class='btn-group'><th> 
                               <a href='factura?id=$mostrar[id_proyecto]'><button type='button' class='btn btn-outline-primary btn-sm active' onclick='hola()'><i class='fas fa-file-pdf' >
</i> Generar Factura</button></a> ";
                      if ($id_usuario != '1') {
                        if ($tipo_usuario != '1') {
                          echo "";
                        } else {
                          echo "</td> &nbsp&nbsp&nbsp
                          <a href='guardarfactura?id=$mostrar[id_proyecto]& $mostrar[tema_proyecto]& $mostrar[codigo_proyecto]'><button type='button' class='btn btn-outline-primary btn-sm active'><i class='fas fa-save'></i> Guardar Factura</button></a>
                          &nbsp&nbsp&nbsp";
                        }
                      }
                    }
                    echo '<script type="text/javascript">function hola(){ alert("Factura Generada")}</script>';
                    ?>
                  </div>
                  <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                  </a>
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
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                  <!-- Bootstrap core JavaScript-->
                  <script src="vendor/jquery/jquery.min.js"></script>
                  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                  <!-- Core plugin JavaScript-->
                  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                  <!-- Custom scripts for all pages-->
                  <script src="js/sb-admin-2.min.js"></script>
                  <!-- Page level plugins -->
                  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
                  <!-- Page level custom scripts -->
                  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>