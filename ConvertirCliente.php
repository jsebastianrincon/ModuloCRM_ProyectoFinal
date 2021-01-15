<?php
require("conlead.php");

$id = $_POST["id"];





$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "UPDATE 'leads' SET 'estado_lead' = '1' WHERE '$id' = id";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Lead Actualizado Correctamente');
  window.location.href= 'Gestionalead.php';
  </script>";
}
