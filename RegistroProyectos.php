<!-- Desarrollo de Formulario de Adicion de Leads -->

<?php
//$estado_proyecto = $_GET['estado_proyecto'];
$id_usuario = $_REQUEST["id_usuario"];
$cliente_proyecto = $_REQUEST["cliente_proyecto"];
$codigo_proyecto = $_REQUEST["codigo_proyecto"];
$fecha_ini_proyecto = $_REQUEST["fecha_ini_proyecto"];
$fecha_fin_proyecto = $_REQUEST["fecha_fin_proyecto"];
$tema_proyecto = $_REQUEST["tema_proyecto"];
$descripcion_proyecto = $_REQUEST["descripcion_proyecto"];


require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO proyectos (id_usuario,cliente_proyecto,codigo_proyecto,fecha_ini_proyecto,fecha_fin_proyecto,tema_proyecto,estado_proyecto,descripcion_proyecto) VALUES ('$id_usuario','$cliente_proyecto','$codigo_proyecto','$fecha_ini_proyecto','$fecha_fin_proyecto','$tema_proyecto','2','$descripcion_proyecto')";


$resultado = mysqli_query($connexion, $instruccion_SQL);

if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Proyecto Almacenado Correctamente');
  window.location.href= 'propuestas.php';
  </script>";
}
