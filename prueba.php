<?php
include("conlead.php");
session_start();

if (!isset($_SESSION['id_usuario'])) {
  header("Location: index.php");
}
//Validacion variables de session
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];
//echo $tipo_usuario;
?>

<!DOCTYPE html>
<html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<head>

<body>
  <fieldset>
    <div class="container p-4">
      <div class="group">
        <div class="card card-body">
          <form class="form-contact" action="RegistroProyectos.php" method='POST'>
            <div class="form-group" id="responsive-form">

              <br>
              <label>Asignado A: </label>

              <?php

              $connexion = mysqli_connect('localhost', 'root', '', 'crmpry');
              mysqli_select_db($connexion, 'crmpry') or die("No se encuentra la Base de  datos");
              $instruccion_SQL = "SELECT concat_ws (' ', nombre_lead , segundo_nombre_lead ,primer_apellido_lead,segundo_apellido_lead) FROM leads WHERE estado_lead = 1 ORDER BY primer_apellido_lead";
              $resultado = mysqli_query($connexion, $instruccion_SQL);
              ?>

              <html>

              <body>
                <select id="cliente" name="cliente">
                  <?php
                  while ($row = mysqli_fetch_array($resultado)) :;
                  ?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                  <?php endwhile; ?>
                </select>
                <label>Telefono: </label><input type="text" size="12" name="telefono_lead" value="" required>
                <label>Ciudad: </label><input type="text" size="20" name="ciudad_lead" placeholder="Ciudad de residencia" required>
                <label>Email: </label><input type="text" size="32" name="email_lead" placeholder="Correo del personal quien asigno" required>
              </body>

              </html>
              <br>
              <br>
</body>
</head>

</html>
<script src="js/jquery-1.10.2.min.js"></script>
<script>
  $(document).ready(function() {

    var cliente = $('#id_cliente');

    $('#id_nombre').change(function() {
      var id_nombre = $(this).val();

      $.ajax({
        data: {
          id_nombre: id_nombre
        },
        dataType: 'html',
        type: 'POST',
        url: 'get_cliente.php',

      }).done(function(data) {
        cliente.html(data);
      });

    });

  });
</script>
</body>

</html>