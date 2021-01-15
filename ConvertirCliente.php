<?php
require("conlead.php");

//$id_lead = $_REQUEST["id_lead"];
$id = $_REQUEST["id"];




$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "UPDATE leads SET estado_lead = 1 WHERE id_lead='$id'";
//$instruccion_SQL = "UPDATE leads SET recurso_lead='$recurso_lead' WHERE documento_lead='$documento_lead'";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error al convertir cliente";
} else {
  echo "<script> alert('Cliente Añadido Satisfactoriamente');
  window.location.href= 'Gestionalead.php';
  </script>";
}
