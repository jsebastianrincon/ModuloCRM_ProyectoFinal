<?php

$proyecto_requerimiento = $_REQUEST["proyecto_requerimiento"];
$descripcion_requerimiento = $_REQUEST["descripcion_requerimiento"];
$dificultad_requerimiento = $_REQUEST["dificultad_requerimiento"];
$costo_requerimiento = $_REQUEST["costo_requerimiento"];
$tiempo_requerimiento = $_REQUEST["tiempo_requerimiento"];


require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO requerimientos_proyectos ('$proyecto_requerimiento','$descripcion_requerimiento','$dificulatad_requerimiento','$costo_requerimiento','$tiempo_requerimiento') VALUES (proyecto_requerimiento,descripcion_requerimiento,dificulatad_requerimiento,costo_requerimiento,tiempo_requerimiento)";


$resultado = mysqli_query($connexion, $instruccion_SQL);

if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Requerimientos asignados correctamente');
  window.location.href= 'GestionVentas.php';
  </script>";
}



//header("Location: AñadirLead.php");

//mysqli_close($connexion);
