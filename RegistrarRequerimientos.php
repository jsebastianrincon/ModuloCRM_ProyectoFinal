<?php
$id_proyecto = $_REQUEST["id_proyecto"];
$proyecto_requerimiento = $_REQUEST["proyecto_requerimiento"];
$nombre_requerimiento = $_REQUEST["nombre_requerimiento"];
$descripcion_requerimiento = $_REQUEST["descripcion_requerimiento"];
$costo_requerimiento = $_REQUEST["costo_requerimiento"];
$tiempo_requerimiento = $_REQUEST["tiempo_requerimiento"];

require("conexion.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO requerimientos_proyectos(id_proyecto,proyecto_requerimiento,nombre_requerimiento,descripcion_requerimiento,costo_requerimiento,tiempo_requerimiento) VALUES ('$id_proyecto','$proyecto_requerimiento','$nombre_requerimiento','$descripcion_requerimiento','$costo_requerimiento','$tiempo_requerimiento')";
$resultado = mysqli_query($mysqli, $instruccion_SQL);

if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Requerimiento Asignado Correctamente');
  window.location.href= 'gestionaventas';
  </script>";
}
