<?php

/* CONTROLADOR PARA CONVERTIR LOS LEADS QUE ESTAN REGISTRADO EN CLIENTES */
require("conlead.php");
// DECLARACION DE LA VARIABLE ID
$id = $_REQUEST["id"];
//LLAMADO PARA LA EJECUCION DE LA CONEXION
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');
mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");
/* INSTRUCCION PARA LA EJECUCION DE LOS REGISTROS EN LA BASE DE DATOS */
$instruccion_SQL = "UPDATE leads SET estado_lead = 1 WHERE id_lead='$id'";
/* RESULTADO PARA EJECUTAR LA CONEXION CON EL CODIGO SQL */
$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error al convertir cliente";
} else {
  echo "<script> alert('Cliente Añadido Satisfactoriamente');
  window.location.href= 'Gestionalead.php';
  </script>";
}
