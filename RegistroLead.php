<!-- Desarrollo de Formulario de Adicion de Leads -->

<?php

$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$compañia = $_REQUEST["compañia"];
$telefono = $_REQUEST["telefono"];
$email = $_REQUEST["email"];
$direccion = $_REQUEST["direccion"];
$pais = $_REQUEST["pais"];
$ciudad = $_REQUEST["ciudad"];
$estado = $_REQUEST["estado"];
$asignado = $_REQUEST["asignado"];
$comentario = $_REQUEST["comentario"];
//$foto = $_REQUEST["pic_art"] ;

require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO leads (nombre, apellido,compañia,telefono, email, direccion, pais,ciudad,estado,asignado,comentario) VALUES ('$nombre','$apellido','$compañia','$telefono','$email','$direccion','$pais','$ciudad','$estado','$asignado','$comentario')";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Registro de Lead Almacenado Correctamente');
  window.location.href= 'AñadirLead.php';
  </script>";
}

//header("Location: AñadirLead.php");

//mysqli_close($connexion);


?>