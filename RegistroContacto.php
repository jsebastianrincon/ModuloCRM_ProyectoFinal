<?php
$id_lead = $_REQUEST["id_lead"];
$lead_telefono = $_REQUEST["lead_telefono"];
$telefono_telefono = $_REQUEST["telefono_telefono"];
$tipo_telefono = $_REQUEST["tipo_telefono"];
$priorida_telefono = $_REQUEST["priorida_telefono"];

require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL_telefono = "INSERT INTO telefonos (id_lead,lead_telefono,telefono_telefono,tipo_telefono,priorida_telefono,vigencia_telefono) VALUES ('$id_lead','$lead_telefono','$telefono_telefono','$tipo_telefono','$priorida_telefono','1')";

$resultado_telefono = mysqli_query($connexion, $instruccion_SQL_telefono);
if ($resultado_telefono == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Registro de Contacto Almacenado Correctamente');
  window.location.href= 'GestionaLead.php';
  </script>";
}
