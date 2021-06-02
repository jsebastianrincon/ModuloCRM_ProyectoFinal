<!-- Desarrollo de Formulario de Adicion De Reuniones -->

<?php

$nombre_reunion = $_REQUEST["nombre_reunion"];
$nombre_cliente = $_REQUEST["cliente_reunion"];
$id_usuario = $_REQUEST['id_usuario'];
$fecha_reunion = $_REQUEST["fecha_reunion"];
$hora_reunion = $_REQUEST["hora_reunion"];
$asignado_reunion = $_REQUEST["asignado_reunion"];
$descripcion_reunion = $_REQUEST["descripcion_reunion"];
$estado_reunion = $_REQUEST["estado_reunion"];



require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");
$instruccion_SQL = "INSERT INTO reuniones (nombre_reunion,id_usuario,fecha_reunion,hora_reunion,asignado_reunion,descripcion_reunion,estado_reunion) VALUES ('$nombre_reunion','$fecha_reunion','$hora_reunion','$asignado_reunion','$nombre_cliente','$descripcion_reunion','$estado_reunion')";
$resultado = mysqli_query($connexion, $instruccion_SQL);

if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Reunion Programada');
  window.location.href= 'Reuniones';
  </script>";
}
?>