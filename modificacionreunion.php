<?php

$cliente_reunion = $_REQUEST["cliente_reunion"];
$nombre_reunion = $_REQUEST["nombre_reunion"];
$fecha_reunion = $_REQUEST["fecha_reunion"];
$hora_reunion = $_REQUEST["hora_reunion"];
$asignado_reunion = $_REQUEST["asignado_reunion"];
$descripcion_reunion = $_REQUEST["descripcion_reunion"];

require("conlead.php");

$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "UPDATE reuniones SET cliente_reunion = '$cliente_reunion',nombre_reunion ='$nombre_reunion',fecha_reunion='$fecha_reunion',hora_reunion='$hora_reunion',asignado_reunion='$asignado_reunion',descripcion_reunion='$descripcion_reunion' WHERE nombre_reunion='$nombre_reunion'";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Reunion Actualizada Correctamente');
  window.location.href= 'Historial.php';
  </script>";
}

//header("Location: AñadirLead.php");

//mysqli_close($connexion);
