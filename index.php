<?php

require "conexion.php";

session_start();

if ($_POST) {

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];


  $sql = "SELECT id_usuario, usuario, password, tipo_usuario FROM usuarios WHERE usuario='$usuario' ";

  $resultado = $mysqli->query($sql);
  $num = $resultado->num_rows;

  if ($num > 0) {
    $row = $resultado->fetch_assoc();
    $password_bd = $row['password'];
    $pass_c = ($password);
    $pass_c = sha1($password);

    if ($password_bd == $pass_c) {

      $_SESSION['id_usuario'] = $row['id_usuario'];
      // $_SESSION['nombre'] = $row['nombre'];
      $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

      $result = mysqli_query($mysqli, $sql);
      while ($mostrar = mysqli_fetch_array($result)) {
        header("Location: principal.php?id=$mostrar[id_usuario]");
      }
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

      <div id="layoutAuthentication">
        <div id="layoutAuthentication">
          <main>
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="card shadow-lg border-1 rounded-lg mt-5">
                  <div class="card-header">
                    <h4 class="text-center font-weight-light my-3">Inicio De Sesión</h4>
                    <center><img width="100" height="100" src="https://d1nhio0ox7pgb.cloudfront.net/_img/v_collection_png/512x512/shadow/users.png"></center>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <center>
                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Usuario</label><input class="form-control py-4" id="inputEmailAddress" name="usuario" type="text" placeholder="Enter email address" /></div>
                      </center>
                      <center>
                        <div class="form-group"><label class="small mb-1" for="inputPassword">Contraseña</label><input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" /></div>
                      </center>
                      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">


                        <button type="submit" class="btn btn-primary"> Iniciar Sesion</button>

                      </div>
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

        <style>
          .btn-whatsapp {
            display: block;
            width: 70px;
            height: 70px;
            color: #fff;
            position: fixed;
            right: 20px;
            bottom: 20px;
            border-radius: 50%;
            line-height: 80px;
            text-align: center;
            z-index: 999;
          }
        </style>

        <div class="btn-whatsapp">
          <a href="https://api.whatsapp.com/send?phone=+57 3124672351" target="_blank">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
          </a>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>