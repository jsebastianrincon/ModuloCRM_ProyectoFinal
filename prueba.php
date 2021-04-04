<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.1/chart.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<script src="vendor/chart.js/Chart.min.js"></script>

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

          title: 'Leads-Clientes Registrados',
          fontSize: 20,
          legend: {
            alignment: 'center',

          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(rows, options);

      })
      .catch((error) => {
        console.log(error);
      });

  }
</script>