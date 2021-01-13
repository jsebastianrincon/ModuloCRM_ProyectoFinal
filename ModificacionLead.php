<!-- Desarrollo de Formulario de Adicion de Leads -->

<?php
//$id = $_POST["id"];
$nombre_lead = $_REQUEST["nombre_lead"];
$segundo_nombre = $_REQUEST["segundo_nombre"];
$primer_apellido = $_POST["primer_apellido"];
$segundo_apellido = $_POST["segundo_apellido"];
$tipodocumento = $_POST["tipodocumento"];
$documento = $_POST["documento"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$departamento = $_POST["departamento"];
$ciudad = $_POST["ciudad"];
$direccion = $_POST["direccion"];
//$estado = $_POST["estado"];
$compañia = $_POST["compañia"];
$asignado = $_POST["asignado"];
$comentario = $_POST["comentario"];
$recurso = $_POST["recurso"];



require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "UPDATE leads SET nombre_lead ='$nombre_lead',segundo_nombre='$segundo_nombre',primer_apellido='$primer_apellido',segundo_apellido='$segundo_apellido',tipodocumento='$tipodocumento',documento='$documento',telefono='$telefono',email='$email',departamento='$departamento',ciudad='$ciudad',direccion='$direccion',compañia='$compañia',asignado='$asignado',comentario='$comentario', recurso='$recurso' WHERE documento='$documento'";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Lead Actualizado Correctamente');
  window.location.href= 'Gestionalead.php';
  </script>";
}

//header("Location: AñadirLead.php");

//mysqli_close($connexion);


?>