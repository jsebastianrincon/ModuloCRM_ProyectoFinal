<?php
include("conlead.php");
session_start();

if (!isset($_SESSION['id_usuario'])) {
  header("Location: index.php");
}
//Validacion variables de session
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];
//echo $tipo_usuario;
?>

<!DOCTYPE html>
<html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<head>

<body>
  <div class="btn-whatsapp">
    <a href="https://api.whatsapp.com/send?phone=5199999999" target="_blank">
      <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
    </a>
  </div>
</body>

</html>