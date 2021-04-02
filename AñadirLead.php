<?php

/* CARGAR CONEXION PARA LA VALIDACION DE LA SESION */

include("conlead.php");
session_start();

if (!isset($_SESSION['id_usuario'])) {
  header("Location: index.php");
}
/* VALIDACION VARIABLES DE SESION */
$nombre = $_SESSION['nombre'];
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

  <title>Añadir Lead</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-friends"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CRM Movip S.A.S</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item inactive">
        <a class="nav-link" href="principal.php">
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


              <a class="collapse-item" href="gestionarclientes.php">Gestion de Clientes</a>
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

              <a class="collapse-item" href="AñadirLead.php">Añadir Leads</a>
              <a class="collapse-item" href="GestionaLead.php">Gestionar Leads</a>
              <a class="collapse-item" href="Reuniones.php">Programar Reuniones</a>
              <a class="collapse-item" href="Historial.php">Historial de Contactos</a>
            </div>
        </li>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
        <li class="nav-item ">
          <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class=" fas fa-cart-plus"></i></i>
            <span>Ventas</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

              <a class="collapse-item" href="propuestas.php">Añadir Propuestas</a>
              <a class="collapse-item" href="gestionaventas.php">Gestionar Ventas</a>


            </div>
          </div>
        </li>



        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="reportes.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Reportes</span></a>
        </li>
      <?php } ?>

      <?php if ($tipo_usuario == 2) { ?>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Proyectos</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="reportes.php">
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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">

              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">




                <!-- Nav Item - Messages -->


                <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php echo $nombre;
                  ?>
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Titulo Formulario de adicion de leads -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Añadir Lead</h1>

          </div>
          <!-- Formulario para Adicion de leads -->
          <fieldset>
            <div class="container p-4">
              <div class="group">
                <div class="card card-body">
                  <form class="form-contact" action="RegistroLead.php" method='POST'>
                    <div class="form-group" id="responsive-form">

                      <br>
                      <label>Primer Nombre: </label><input type="text" size="18" name="nombre_lead" required placeholder="Ingrese Primer Nombre " maxlength=50>
                      <label>Segundo Nombre: </label><input type="text" size="19" name="segundo_nombre_lead" placeholder="Ingrese Segundo Nombre ">
                      <label>Primer Apellido: </label><input type="text" size="22" name="primer_apellido_lead" placeholder="Ingrese Primer Apellido" required>
                      <br>
                      <br>
                      <label>Segundo Apellido: </label><input type="text" size="21" name="segundo_apellido_lead" placeholder="Ingrese Segundo Apellido">
                      <label>Tipo de Documento: </label>
                      <select name="tipodocumento_lead">
                        <option type="text" size="25" value="Elegir" id="TD">Seleccione Tipo de documento</option>
                        <option value="CC" id="CC">Cedula de Ciudadania</option>
                        <option value="CE" id="CE">Cedula de Extranjeria</option>
                        <option value="PA" id="PA">Pasaporte</option>
                      </select>
                      <label>Documento: </label><input type="text" size="13" name="documento_lead" placeholder="Ingrese Documento" required>
                      <br>
                      <br>
                      <label>Telefono: </label><input type="text" size="18" name="telefono_lead" placeholder="Ingrese Telefono" required>
                      <label>Email: </label><input type="email" size="26" name="email_lead" placeholder="Ingrese Email" required>
                      <label>Departamento: </label>
                      <select name="departamento_lead">
                        <option type="text" size="25" value="Elegir" id="AF">Seleccionar Departamento Residencia</option>
                        <option value="Amazonas" id="AZ<">Amazonas</option>
                        <option value="Antioquia" id="AN">Antioquia</option>
                        <option value="Arauca" id="AR">Arauca</option>
                        <option value="Atlantico" id="AT">Atlantico</option>
                        <option value="Bogota D.C." id="BO">Bogota DC</option>
                        <option value="Bolivar" id="BL">Bolivar</option>
                        <option value="Boyaca" id="BY">Boyaca</option>
                        <option value="Caldas" id="CL">Caldas</option>
                        <option value="Caqueta" id="CQ">Caqueta</option>
                        <option value="Casanare" id="CS">Casanare</option>
                        <option value="Cauca" id="CA">Cauca</option>
                        <option value="Cesar" id="CE">Cesar</option>
                        <option value="Choco" id="CH">Choco</option>
                        <option value="Cordoba" id="CO">Cordoba</option>
                        <option value="Cundinamarca" id="CU">Cundinamarca</option>
                        <option value="Guainia" id="GU">Guania</option>
                        <option value="Guaviare" id="GV">Guaviare</option>
                        <option value="Huila" id="HU">Huila</option>
                        <option value="Quindio" id="QU">Quindio</option>
                        <option value="Risaralda" id="RS">Risaralda</option>
                        <option value="San Andres" id="SA">Risaralda</option>
                        <option value="Santander" id="ST">Santander</option>
                        <option value="Sucre" id="SU">Sucre</option>
                        <option value="Tolima" id="TO">Tolima</option>
                        <option value="Valle" id="VA">Valle</option>
                        <option value="Vaupes" id="VU">Vaupes</option>
                        <option value="Vichada" id="VI">Vichada</option>
                      </select>
                      <br>
                      <br>
                      <label>Ciudad: </label><input type="text" size="23" name="ciudad_lead" placeholder="Ciudad de residencia" required>
                      <label>Direccion: </label><input type="text" size="23" name="direccion_lead" placeholder="Ingrese Direccion de domicilio" required>
                      <label>Estado: </label>
                      <select name="estado_lead">
                        <option value="Seleccione Estado">Asigne un Estado</option>
                        <option value="Nuevo" id="NV">Nuevo</option>
                        <option value="Cliente" id="CL">Cliente</option>
                      </select>
                      <br>
                      <br>
                      <label>Compañia: </label><input type="text" size="30" name="compañia_lead" placeholder="Ingrese Compañia" required>

                      <label>Asignado: </label>
                      <select name="asignado_lead">
                        <option value="Asignado por">Seleccione Area</option>
                        <option value="Area Comercial" id="ArC">Area Comercial</option>
                        <option value="Area Marketing" id="ArM">Area de Marketing</option>
                      </select>
                      <br>
                      <br>
                      <label>Comentario: </label><br><textarea name="comentario_lead" rows="3" cols="60" placeholder="Ingrese algun comentario..." required></textarea>
                      <br>
                      <br>
                      <label>Recurso: </label>
                      <select name="recurso_lead">
                        <option value="Asignado por">Seleccione Recurso</option>
                        <option value="Facebook" id="F">Facebook</option>
                        <option value="Google" id="G">Google</option>
                        <option value="Twitter" id="T">Twitter</option>
                        <option value="Anuncio" id="A">Anuncio</option>
                      </select>
                      <br>
                      <br>
                      <input type="submit" class="btn btn-success btn-block" name="submit" value="Guardar">

          </fieldset>



        </div>
      </div>
    </div> <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->



  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
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
          <a class="btn btn-primary" href="index.php">Cerrar Sesion</a>
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

</body>

</html>