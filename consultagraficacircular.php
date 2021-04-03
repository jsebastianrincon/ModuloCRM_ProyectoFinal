<?


//Validacion variables de session
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];
//echo $tipo_usuario;

$id = '';
$cantidad = '';

$sql = "SELECT COUNT(id_lead) AS Cantidad FROM leads WHERE estado_lead = 1 AND id_lead >1 UNION SELECT COUNT(id_lead) FROM leads WHERE estado_lead = 0 AND id_lead >1";
$total = mysqli_query($conexion2, $sql);
$rows = mysqli_fetch_all($total);


$data = json_encode($rows);

echo $data;
?>