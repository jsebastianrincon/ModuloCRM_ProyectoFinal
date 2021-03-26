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



<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript"></script>
  <script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
  <div id="piechart" style="width: 900px; height: 500px;"></div>

</body>

<script>
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    axios.get('https://127.0.0.1/ModuloCRM_ProyectoFinal/consultagraficacircular.php')
      .then((response) => {

        var data = response.data;
        var clientes = parseInt(data[0][0])
        var leads = parseInt(data[1][0])
        var rows = google.visualization.arrayToDataTable([

          ['Tipo', 'Cantidad'],
          ['Leads', leads],
          ['Clientes', clientes]

        ]);

        var options = {
          title: 'Graficas'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(rows, options);

      })
      .catch((error) => {
        console.log(error);
      });

  }
</script>

</html>