<?php


$codigo_proyecto = $_REQUEST["codigo_proyecto"];
$fecha_ini_proyecto = $_REQUEST["fecha_ini_proyecto"];
$fecha_fin_proyecto = $_REQUEST["fecha_fin_proyecto"];
$tema_proyecto = $_REQUEST["tema_proyecto"];
$descripcion_proyecto = $_REQUEST["descripcion_proyecto"];


require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "UPDATE proyectos SET codigo_proyecto='$codigo_proyecto',fecha_ini_proyecto='$fecha_ini_proyecto',fecha_fin_proyecto='$fecha_fin_proyecto',tema_proyecto='$tema_proyecto',descripcion_proyecto='$descripcion_proyecto' WHERE codigo_proyecto='$codigo_proyecto'";


$resultado = mysqli_query($connexion, $instruccion_SQL);

if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Proyecto Modificado Correctamente');
  window.location.href= 'gestionaventas.php';
  </script>";
}
