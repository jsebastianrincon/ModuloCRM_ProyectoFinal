<?php
require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

$id_reunion = $_GET['id'];
$sql = "DELETE FROM crmpry.reuniones WHERE id_reunion='$id_reunion'";

if (mysqli_query($connexion, $sql)) {
  echo "Reunion Eliminada Correctamente";
} else {
  echo "Error ";
}
