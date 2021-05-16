<?php

$cod_factura = $_REQUEST["cod_factura"];
$proyecto_factura = $_REQUEST["proyecto_factura"];
$fecha_factura = $_REQUEST["fecha_factura"];
$fecha_pago_factura = $_REQUEST["fecha_pago_factura"];

$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');
mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

$instruccion_SQL = "INSERT INTO facturas (cod_factura, proyecto_factura,fecha_factura,fecha_pago_factura,estado_factura) VALUES ('$cod_factura','$proyecto_factura','$fecha_factura','$fecha_pago_factura',1)";

$resultado = mysqli_query($connexion, $instruccion_SQL);

if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Detalles Almacenados');
  window.location.href= 'gestionaventas.php';
  </script>";
}
