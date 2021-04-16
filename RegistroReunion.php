<!-- Desarrollo de Formulario de Adicion De Reuniones -->

<?php

$nombre_cliente = $_REQUEST["cliente_reunion"];
$nombre_reunion = $_REQUEST["nombre_reunion"];
$fecha_reunion = $_REQUEST["fecha_reunion"];
$hora_reunion = $_REQUEST["hora_reunion"];
$asignado_reunion = $_REQUEST["asignado_reunion"];
$descripcion_reunion = $_REQUEST["descripcion_reunion"];
$estado_reunion = $_REQUEST["estado_reunion"];


$data = explode("-", $nombre_cliente);
$id_usuario = $data[0];
$cliente_reunion = $data[1];

require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO reuniones (id_usuario,cliente_reunion,nombre_reunion,fecha_reunion,hora_reunion,asignado_reunion,descripcion_reunion,estado_reunion) VALUES ('$id_usuario','$cliente_reunion','$nombre_reunion','$fecha_reunion','$hora_reunion','$asignado_reunion','$descripcion_reunion','$estado_reunion')";


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