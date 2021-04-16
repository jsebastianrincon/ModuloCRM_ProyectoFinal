<!-- CONTROL PARA LA ASIGNACION Y REGISTRO DE LOS USUARIOS EN LA BASE DE DATOS -->

<?php
/* VARIABLES */
$id_cliente = $_REQUEST["id_cliente"];
$$usuario = $_REQUEST["usuario"];
$password = $_REQUEST["password"];


/* LLAMADO PARA EJECUTAR LA CONEXION */
require("conlead.php");
$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");

/* INSTRUCCION SQL PARA ALMACENAR EL USUARIO Y LA CONTRASEÑA EN LA BASE DE DATOS */

$instruccion_SQL = "INSERT INTO usuarios (id_cliente,usuario,password,tipo_usuario) VALUES ('$id_cliente','$usuario',sha1('$password'),'2')";

$resultado = mysqli_query($connexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "error en la consulta";
} else {
  echo "<script> alert('Usuario Registrado');
  window.location.href= 'principal.php';
  </script>";
}



?>