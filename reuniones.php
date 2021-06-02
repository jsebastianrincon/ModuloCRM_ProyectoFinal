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

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agendar Reuniones</title>

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
        <li class="nav-item active">
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
        <li class="nav-item">
          <a class="nav-link" href="reportes">
            <i class="fas fa-fw fa-table"></i>
            <span>Reportes</span></a>
        </li>
      <?php } ?>

      <?php if ($tipo_usuario == 2) { ?>
        <li class="nav-item">
          <a class="nav-link" href="reportes">
            <i class="fas fa-fw fa-table"></i>
            <span>Reportes</span></a>
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
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Agendar Reuniones</h1>
          </div>
          <!-- Titulo Formulario de adicion de leads -->
          <fieldset>
            <div class="container p-4">
              <div class="group">
                <div class="card card-body">
                  <form class="form-contact" action="RegistroReunion.php" method='POST'>
                    <div class="form-group" id="responsive-form" display: flex;>
                      <center><label style="color: red;">(*)</label><label>Tema Reunion </label>
                        <br>
                        <input type="text" size="40" name="nombre_reunion" onkeypress="return soloLetras(event)" required>
                      </center>
                      <center><label>Cod Cliente: </label><label style="color: red;">(*)</label>
                        <br>
                        <name='id_usuario'>
                          <?php
                          require("conlead.php");
                          $connexion = mysqli_connect('localhost', 'root', '', 'crmpry');
                          mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de  datos");
                          $instruccion_SQL = "SELECT (id_lead)
                                                FROM leads 
                                                LEFT JOIN usuarios ON usuarios.id_usuario = leads.id_lead 
                                                WHERE leads.estado_lead = 1 AND id_lead >1 ORDER BY leads.primer_apellido_lead ";
                          $resultado = mysqli_query($connexion, $instruccion_SQL);
                          ?>

                          <body>
                            <select name='cliente_reunion' required>
                              <?php
                              while ($row = mysqli_fetch_array($resultado)) :;
                              ?>
                                <option value="<?php echo $row[0]; ?>"><?php echo $row[0];
                                                                        ?></option>
                              <?php endwhile; ?>
                            </select>
                            <br>
                            <br>
                      </center>
                      <center><label style="color: red;">(*)</label><label>Fecha: </label>
                        <input type="date" size="40" name="fecha_reunion" required>
                        <label style="color: red;">(*)</label><label>Hora: </label><input type="time" size="50" name="hora_reunion" required>
                        <br>
                        <br>
                        <label>Asignado Por: </label>
                        <br>
                        <select name="asignado_reunion">
                          <option value="Asignado por">Seleccione Area</option>
                          <option value="Area Comercial" id="ArC">Area Comercial</option>
                          <option value="Area Marketing" id="ArM">Area de Marketing</option>
                        </select>
                        <br>
                        <br>
                        <label>Asignada A: </label><label style="color: red;">(*)</label>
                        <br>
                        <name='cliente_reunion'>
                          <?php
                          require("conlead.php");
                          $connexion = mysqli_connect('localhost', 'root', '', 'crmpry');
                          mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de  datos");
                          $instruccion_SQL = "SELECT concat_ws (' ', id_usuario, '-', nombre_lead , segundo_nombre_lead ,primer_apellido_lead,segundo_apellido_lead) 
                                                FROM leads 
                                                LEFT JOIN usuarios ON usuarios.id_usuario = leads.id_lead 
                                                WHERE leads.estado_lead = 1 AND id_lead >1 ORDER BY leads.primer_apellido_lead ";

                          $resultado = mysqli_query($connexion, $instruccion_SQL);
                          ?>
                          <html>
                          <select name='id_usuario'>
                            <option value="">Seleccione Cliente</option>
                            <?php
                            while ($row = mysqli_fetch_array($resultado)) :;
                            ?>
                              <option value="<?php echo $row[0]; ?>"><?php echo $row[0];
                                                                      ?></option>
                            <?php endwhile; ?>
                          </select>
                          <br>
                          <br>
</body>

</body>


</html>
<center><label>Estado: </label>
  <br>
  <input type="text" size="15" name="estado_reunion" onkeypress="return soloLetras(event)">
</center>
</center>
<br>
<center><label style="color: red;">(*)</label><label>Descripcion: </label><br><textarea name="descripcion_reunion" rows="2" cols="30" placeholder="Ingrese Descripcion..." required onkeypress="return soloLetras(event)"></textarea></center>
<br>
<br>
<input type="submit" class="btn btn-success btn-block" name="submit" value="Programar Reunion">
</fieldset>
</div>
</div>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">¿Desea Cerrar Sesion?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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
<script>
  function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz@-/",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
</script>
</body>

</html>