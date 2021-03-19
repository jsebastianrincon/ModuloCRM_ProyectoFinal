<?php

include 'barcode.php';
function generarCodigo($longitud)
{
  $key = '000100255590';
  $pattern = '';
  $max = strlen($pattern) - 1;
  for ($i = 0; $i < $longitud; $i++) $key .= $pattern{
    mt_rand(0, $max)};
  return $key;
  barcode('images/' . $key . '.png', $key, 50, 'horizontal', 'code128', true);
}
?>
<img src="codigos/<?php echo $key . '.png'; ?>">