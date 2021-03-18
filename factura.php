<?php
require('reportes\fpdf.php');

include('conlead.php');
$id = $_GET['id'];
$sql = "SELECT codigo_proyecto AS Codigo ,tema_proyecto AS Tema  FROM proyectos WHERE id_proyecto = $id";
$resultset = mysqli_query($conexion2, $sql) or die("database error:" . mysqli_error($conexion2));


$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('images/LOGO.jpg', 12, 12, 40);
$pdf->SetFont('Arial', 'B', 5);

$pdf->Cell(200, 30, 'FACTURA PROYECTO ', 10, 10, 'C');
$pdf->Cell(200, 10, 'DATOS PROYECTO ', 10, 10, 'L');


while ($field_info = mysqli_fetch_field($resultset)) {
  $pdf->Cell(24, 10, $field_info->name, 1);
};
while ($rows = mysqli_fetch_assoc($resultset)) {
  $pdf->SetFont('Arial', '',);
  $pdf->Ln();
  foreach ($rows as $column) {
    $pdf->Cell(24, 10, $column, 1);
  }
}
$pdf->Output();
/* Consulta para generar los requerimientos con los proyectos 
SELECT nombre_requerimiento AS 'Requerimiento', costo_requerimiento AS 'Costo',tiempo_requerimiento AS 'Tiempo' FROM proyectos INNER JOIN requerimientos_proyectos ON proyectos.id_proyecto = requerimientos_proyectos.id_proyecto WHERE proyectos.id_proyecto = '19' 
*/