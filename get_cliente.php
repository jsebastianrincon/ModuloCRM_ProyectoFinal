<?php
include 'conexion.php';

$id_lead = filter_input(INPUT_POST, 'id_lead');



$consulta = "SELECT id_lead FROM leads WHERE id_lead = $id_lead";
$datos = $conf->consulta($consulta);




$conf->desconectarDB();

if (count($datos) == 0) {
  echo '<option value="0">No hay registros en esta colonia</option>';
}

for ($i = 0; $i < count($datos); $i++) {


  echo '<option value="' . $datos[$i]["id_lead"] . '">' . $datos[$i]["nombre_lead"] . '</option>';
}
