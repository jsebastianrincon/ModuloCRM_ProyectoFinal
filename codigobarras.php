<?php

include_once "barcode/src/BarcodeGenerator.php";
include_once "barcode/src/BarcodeGeneratorHTML.php";
include_once "barcode/src/BarcodeGeneratorJPG.php";
include_once "barcode/src/BarcodeGeneratorPNG.php";
include_once "barcode/src/BarcodeGeneratorSVG.php";


use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorJPG;

$barHTML = new BarcodeGeneratorHTML();
$numero_aleatorio = rand(1, 100);
$string = (string)$numero_aleatorio;
echo $barHTML->getBarcode($string, $barHTML::TYPE_CODE_128);
