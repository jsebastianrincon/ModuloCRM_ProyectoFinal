<?php

$nombre_lead = $_REQUEST["nombre_lead"];
$segundo_nombre_lead = $_REQUEST["segundo_nombre_lead"];
$primer_apellido_lead = $_REQUEST["primer_apellido_lead"];
$segundo_apellido_lead = $_REQUEST["segundo_apellido_lead"];
$tipodocumento_lead = $_REQUEST["tipodocumento_lead"];
$documento_lead = $_REQUEST["documento_lead"];
$telefono_lead = $_REQUEST["telefono_lead"];
$email_lead = $_REQUEST["email_lead"];
$departamento_lead = $_REQUEST["departamento_lead"];
$ciudad_lead = $_REQUEST["ciudad_lead"];
$direccion_lead = $_REQUEST["direccion_lead"];
$estado_lead = $_REQUEST["estado_lead"];
$compañia_lead = $_REQUEST["compañia_lead"];
$asignado_lead = $_REQUEST["asignado_lead"];
$recurso_lead = $_REQUEST["recurso_lead"];
$comentario_lead = $_REQUEST["comentario_lead"];

require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de
datos");

$instruccion_SQL = "INSERT INTO leads (nombre_lead, segundo_nombre_lead,primer_apellido_lead,segundo_apellido_lead,tipodocumento_lead,documento_lead,telefono_lead,email_lead,departamento_lead,ciudad_lead,direccion_lead,estado_lead,compañia_lead,asignado_lead,recurso_lead,comentario_lead) VALUES ('$nombre_lead','$segundo_nombre_lead','$primer_apellido_lead','$segundo_apellido_lead','$tipodocumento_lead','$documento_lead','$telefono_lead','$email_lead','$departamento_lead','$ciudad_lead','$direccion_lead','0','$compañia_lead','$asignado_lead','$recurso_lead','$comentario_lead')";


$resultado = mysqli_query($connexion, $instruccion_SQL);

if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script>
  alert('Registro de Lead Almacenado Correctamente');
  window.location.href = 'AñadirLead.php';
</script>";
}



//header("Location: AñadirLead.php");

//mysqli_close($connexion);
