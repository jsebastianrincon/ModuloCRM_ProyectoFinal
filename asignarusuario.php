<!-- Desarrollo de Formulario de Adicion De Reuniones -->

<?php

$usuario = $_REQUEST["usuario"];
$password = $_REQUEST["password"];



require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO usuarios (usuario,password,tipo_usuario) VALUES ('$usuario',sha1('$password'),'2')";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Usuario Registrado');
  window.location.href= 'principal.php';
  </script>";
}

//header("Location: AñadirLead.php");

//mysqli_close($connexion);


?>