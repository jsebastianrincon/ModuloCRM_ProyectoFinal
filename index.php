<?php

require "conexion.php";

session_start();

if ($_POST) {

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  $sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario='$usuario'";
  //echo $sql;
  $resultado = $mysqli->query($sql);
  $num = $resultado->num_rows;

  if ($num > 0) {
    $row = $resultado->fetch_assoc();
    $password_bd = $row['password'];

    $pass_c = sha1($password);

    if ($password_bd == $pass_c) {

      $_SESSION['id'] = $row['id'];
      $_SESSION['nombre'] = $row['nombre'];
      $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

      header("Location: principal.php");
    } else {
      echo "<script type=\"text/javascript\">alert(\"Usuario o Contraseña Incorrectos\");</script>";
    }
  } else {
    echo "<script type=\"text/javascript\">alert(\"Usuario o Contraseña Incorrectos\");</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login MODULO PARA LA ADMINISTRACION, CALIFICACION, GESTION COMERCIAL Y RELACION CON EL CLIENTE DE LOS PRODUCTOS Y SERVICIOS DE LA COMPAÑÍA MOVIP S.A.S</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->




    <div class="card o-hidden border-0 shadow-lg my-5">



      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login CRM </title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
      </head>

      <body class="bg-primary">
        <div id="layoutAuthentication">
          <div id="layoutAuthentication_content">
            <main>

              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-1 rounded-lg mt-5">
                    <div class="card-header">
                      <h3 class="text-center font-weight-light my-3">Login</h3>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Usuario</label><input class="form-control py-4" id="inputEmailAddress" name="usuario" type="text" placeholder="Enter email address" /></div>
                        <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" /></div>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a>
                          <button type="submit" class="btn btn-primary">Login</button></div>
                      </form>
                    </div>
                    </form>
                  </div>

                </div>
              </div>
          </div>

          </main>
        </div>
        <div id="layoutAuthentication_footer">
          <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">

            </div>
          </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>