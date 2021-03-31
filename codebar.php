<?php
/* CARGAR CONEXION PARA LA VALIDACION DE LA SESION */

include("conlead.php");
session_start();
require('reportes\fpdf.php');

if (!isset($_SESSION['id_usuario'])) {
  header("Location: index.php");
}
/* VALIDACION VARIABLES DE SESION */
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

/* Inclusion de las librerias para la ejecucion del codigo */

include_once "barcode/src/BarcodeGenerator.php";
include_once "barcode/src/BarcodeGeneratorHTML.php";
include_once "barcode/src/BarcodeGeneratorJPG.php";
include_once "barcode/src/BarcodeGeneratorPNG.php";
include_once "barcode/src/BarcodeGeneratorSVG.php";


use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorSVG;

$barHTML = new BarcodeGeneratorSVG();
$numero_aleatorio = rand(1, 2000);
$string = (string)$numero_aleatorio;
echo $barHTML->getBarcode($string, $barHTML::TYPE_CODE_128);
