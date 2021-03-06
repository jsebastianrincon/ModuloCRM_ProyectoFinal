<?php

require('reports\fpdf.php');
include('conlead.php');

$sql = "SELECT nombre_lead AS Primer_Nombre, segundo_nombre_lead AS Segundo_Nombre, primer_apellido_lead AS Primer_Apellido, documento_lead AS Documento, telefono_lead AS Telefono,  direccion_lead AS Direccion, compañia_lead AS Empresa    FROM leads WHERE estado_lead = 1 && id_lead > 1 ";
$resultset = mysqli_query($conexion2, $sql) or die("database error:" . mysqli_error($conexion2));

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('images/LOGO.jpg', 12, 12, 40);
$pdf->SetFont('Arial', 'B', 5);
$pdf->Ln(10);
$pdf->Cell(200, 30, 'REPORTE DE CLIENTES ', 20, 20, 'C');

while ($field_info = mysqli_fetch_field($resultset)) {
  $pdf->Cell(24, 7, $field_info->name, 2);
};

while ($rows = mysqli_fetch_assoc($resultset)) {
  $pdf->SetFont('Arial', '',);
  $pdf->Ln();
  foreach ($rows as $column) {
    $pdf->Cell(24, 4, $column, 0.5);
  }
}
($pdf->Output() == true);
