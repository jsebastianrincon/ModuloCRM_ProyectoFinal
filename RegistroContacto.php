<?php

$lead_telefono = $_REQUEST["lead_telefono"];
$telefono_telefono = $_REQUEST["telefono_telefono"];
$tipo_telefono = $_REQUEST["tipo_telefono"];


require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");


$instruccion_SQL_telefono = "INSERT INTO telefonos (lead_telefono,telefono_telefono,tipo_telefono,priorida_telefono,vigencia_telefono) VALUES ('$lead_telefono','$telefono_telefono','$tipo_telefono','1','1')";


$resultado_telefono = mysqli_query($connexion, $instruccion_SQL_telefono);
if ($resultado_telefono == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Registro de Contacto Almacenado Correctamente');
  window.location.href= 'GestionaLead.php';
  </script>";
}



//header("Location: AñadirLead.php");

//mysqli_close($connexion);
