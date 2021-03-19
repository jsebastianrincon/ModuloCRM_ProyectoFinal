<?php
require('reportes\fpdf.php');

include('conlead.php');
$id = $_GET['id'];
$sql = "SELECT codigo_proyecto AS Codigo ,tema_proyecto AS Tema  FROM proyectos WHERE id_proyecto = $id";
$resultset = mysqli_query($conexion2, $sql) or die("database error:" . mysqli_error($conexion2));

function generarCodigo($longitud)
{
  $key = '';
  $pattern = '1234567891011';
  $max = strlen($pattern) - 1;
  for ($i = 0; $i < $longitud; $i++) $key .= $pattern{
    mt_rand(0, $max)};
  return $key;
}

//Ejemplo de uso



$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('images/LOGO.jpg', 12, 12, 40);
$pdf->SetFont('Arial', 'B', 5);

$pdf->Cell(200, 30, 'FACTURA PROYECTO ', 20, 20, 'C');
$pdf->Cell(200, 30, 'DATOS PROYECTO ', 20, 20, 'L');


while ($field_info = mysqli_fetch_field($resultset)) {
  $pdf->Cell(40, 10, $field_info->name, 1);
};
while ($rows = mysqli_fetch_assoc($resultset)) {
  $pdf->SetFont('Arial', '',);
  $pdf->Ln();
  foreach ($rows as $column) {
    $pdf->Cell(40, 10, $column, 1);
  }
}
$pdf->Ln(10);


$pdf->SetFont('Arial', 'B', 5);
$pdf->Cell(200, 30, 'REQUERIMIENTOS DEL PROYECTO ', 20, 20, 'C');

$sql_req = "SELECT nombre_requerimiento AS Requerimiento,descripcion_requerimiento AS Descripcion,costo_requerimiento AS Costo,tiempo_requerimiento AS Tiempo FROM requerimientos_proyectos WHERE id_proyecto = $id";
$resultset2 = mysqli_query($conexion2, $sql_req) or die("database error:" . mysqli_error($conexion2));

while ($field_info = mysqli_fetch_field($resultset2)) {
  $pdf->Cell(48, 10, $field_info->name, 1);
};
while ($rows = mysqli_fetch_assoc($resultset2)) {
  $pdf->SetFont('Arial', '', 4.6);
  $pdf->Ln();
  foreach ($rows as $column) {
    $pdf->Cell(48, 10, $column, 1);
  }
}

$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 5);
$pdf->Ln(15);


$sql_total = "SELECT SUM(costo_requerimiento * tiempo_requerimiento) as Costo_Parcial, SUM(tiempo_requerimiento) as Tiempo, '19%' as IVA from requerimientos_proyectos WHERE id_proyecto = $id";

$resultset4 = mysqli_query($conexion2, $sql_total) or die("database error:" . mysqli_error($conexion2));


while ($field_info = mysqli_fetch_field($resultset4)) {
  $pdf->Cell(48, 10, $field_info->name, 1);
};
while ($rows = mysqli_fetch_assoc($resultset4)) {
  $pdf->SetFont('Arial', '', 4.6);
  $pdf->Ln();
  foreach ($rows as $column) {
    $pdf->Cell(48, 10, $column, 1);
  }
}

$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 5);
$iva = '0.19';
$sql_final = $sql_total_proyecto = "SELECT SUM((costo_requerimiento * tiempo_requerimiento)+(costo_requerimiento * tiempo_requerimiento)*$iva) as Total_Proyecto from requerimientos_proyectos WHERE id_proyecto = $id";
$total_proyecto = mysqli_query($conexion2, $sql_total_proyecto);

while ($field_info = mysqli_fetch_field($total_proyecto)) {
  $pdf->Cell(48, 10, $field_info->name, 1);
};
while ($rows = mysqli_fetch_assoc($total_proyecto)) {
  $pdf->SetFont('Arial', '', 4.6);
  $pdf->Ln();
  foreach ($rows as $column) {
    $pdf->Cell(48, 10, $column, 1);
  }
}
$pdf->Ln();
$pdf->Ln();

// genera un código de 6 caracteres de longitud.

$pdf->Output();
/* Consulta para generar los requerimientos con los proyectos 
SELECT nombre_requerimiento AS 'Requerimiento', costo_requerimiento AS 'Costo',tiempo_requerimiento AS 'Tiempo' FROM proyectos INNER JOIN requerimientos_proyectos ON proyectos.id_proyecto = requerimientos_proyectos.id_proyecto WHERE proyectos.id_proyecto = '19' 
*/