<?php
require('reportes\fpdf.php');
include('conlead.php');

$sql = "SELECT nombre_reunion AS Motivo_De_La_Reunion ,fecha_reunion AS Fecha,hora_reunion AS Hora, asignado_reunion AS Asignado FROM reuniones WHERE fecha_reunion < CURDATE()";
$resultset = mysqli_query($conexion2, $sql) or die("database error:" . mysqli_error($conexion2));

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('images/LOGO.jpg', 12, 12, 40);
$pdf->SetFont('Arial', 'B', 5);
$pdf->Ln(10);
$pdf->Cell(200, 30, 'REPORTE DE REUNIONES REALIZADAS ', 20, 20, 'C');

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
$pdf->Output();
