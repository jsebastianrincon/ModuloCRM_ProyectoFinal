<?php

include 'conexion.php';

EliminarProducto($_GET["documento"]);
function EliminarProducto($documento)
{
  require("conlead.php");
  $connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

  mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");
  $sql = "DELETE FROM leads WHERE documento ='" . $documento . "'";
  if ($resultado == FALSE) {
    echo "error en la consulta";
  } else {

    echo "<script> alert('Registro de Lead Almacenado Correctamente');
  window.location.href= 'AñadirLead.php';
  </script>";
  }
}
?>

<script type="text/javascript">
  alert("Lead Eliminado Exitosamente");
  window.location.href = 'gestionalead.php';
</script>