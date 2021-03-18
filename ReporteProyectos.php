<?php
require('reportes\fpdf.php');

include('conlead.php');
$sql = "SELECT codigo_proyecto AS Codigo, cliente_proyecto AS Cliente, fecha_ini_proyecto AS Fecha_Inicio, tema_proyecto AS Tema, descripcion_proyecto AS Descripcion FROM proyectos";
$resultset = mysqli_query($conexion2, $sql) or die("database error:" . mysqli_error($conexion2));


$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('images/LOGO.jpg', 12, 12, 40);
$pdf->SetFont('Arial', 'B', 5);
$pdf->Ln(10);

$pdf->Cell(200, 30, 'REPORTE DE PROYECTOS ', 20, 20, 'C');
while ($field_info = mysqli_fetch_field($resultset)) {
  $pdf->Cell(37, 10, $field_info->name, 1);
};
while ($rows = mysqli_fetch_assoc($resultset)) {
  $pdf->SetFont('Arial', '',);
  $pdf->Ln();
  foreach ($rows as $column) {
    $pdf->Cell(37, 10, $column, 1);
  }
}
$pdf->Output('');
