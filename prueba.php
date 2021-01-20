<?php

require("conlead.php");


$connexion = mysqli_connect('localhost', 'root', '', 'crmpry');

mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de 
 datos");
$instruccion_SQL = "SELECT concat_ws (' ',nombre_lead , primer_apellido_lead) FROM leads WHERE estado_lead = 1 ORDER BY primer_apellido_lead";
$resultado = mysqli_query($connexion, $instruccion_SQL);
?>

<html>

<body>
  <select>
    <?php
    while ($row = mysqli_fetch_array($resultado)) :;
    ?>
      <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
      <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
    <?php endwhile; ?>
  </select>
</body>

</html>