<!-- Desarrollo de Formulario de Adicion de Leads -->

<?php

$nombre_lead = $_REQUEST["nombre_lead"];
$primer_apellido = $_REQUEST["primer_apellido"];
$segundo_apellido = $_REQUEST["segundo_apellido"];
$tipodocumento = $_REQUEST["tipodocumento"];
$documento = $_REQUEST["documento"];
$telefono = $_REQUEST["telefono"];
$email = $_REQUEST["email"];
$departamento = $_REQUEST["departamento"];
$ciudad = $_REQUEST["ciudad"];
$direccion = $_REQUEST["direccion"];
$estado = $_REQUEST["estado"];
$compañia = $_REQUEST["compañia"];
$asignado = $_REQUEST["asignado"];
$recurso = $_REQUEST["recurso"];
$comentario = $_REQUEST["comentario"];



require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO leads (nombre_lead, primer_apellido,segundo_apellido,tipodocumento,documento,telefono,email,departamento,ciudad,direccion,estado,compañia,asignado,recurso,comentario) VALUES ('$nombre_lead','$primer_apellido','$segundo_apellido','$tipodocumento','$documento','$telefono','$email','$departamento','$ciudad','$direccion','$estado','$compañia','$asignado','$recurso','$comentario')";

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