<!-- Desarrollo de Formulario de Adicion De Reuniones -->

<?php

$nombre = $_REQUEST["nombre"];
$fecha = $_REQUEST["fecha"];
$hora = $_REQUEST["hora"];
$asignado = $_REQUEST["asignado"];
$descripcion = $_REQUEST["descripcion"];




require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO reuniones (nombre,fecha,hora,asignado,descripcion) VALUES ('$nombre','$fecha','$hora','$asignado','$descripcion')";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Reunion Programada');
  window.location.href= 'Reuniones.php';
  </script>";
}

//header("Location: AñadirLead.php");

//mysqli_close($connexion);


?>