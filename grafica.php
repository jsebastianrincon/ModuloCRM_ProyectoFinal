<?php
include("conlead.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica</title>
</head>

<body>
    <h4>Gráficas</h4>
    <?php
    $conteoA = 'SELECT COUNT(id_lead) AS Leads FROM leads WHERE estado_lead = 0 ';
    $totalA = mysqli_query($conexion2, $conteoA);
    $rowsA = implode(mysqli_fetch_array($totalA));
    echo "<br>";
    echo "<br>";

    $conteoB = 'SELECT COUNT(id_lead) AS Clientes FROM leads WHERE estado_lead = 1 ';
    $totalB = mysqli_query($conexion2, $conteoB);
    $final = $totalB;
    $rowsB = implode(mysqli_fetch_array($totalB));

    ?>

    <!-- script para funcionamiento de la grafica -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <!-- END -->
    <div style="width:50%;float:left;">

        <canvas id="nombreGrafica"></canvas>
    </div>
    <?php

    echo "
                <script> /*Grafica tipo barra*/
                    var ctx = document.getElementById('nombreGrafica').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type:'pie',   /// tipo de gráfica (pie), (bar),  (line)
                        data:{
                            labels:['Clientes','Leads'], /*dibuja las columnas*/
                            datasets:[{
                                label:'Encabezado ', /*titulo principal*/
                                data:['$rowsA','$rowsB'],  /*imprime los datos o variables a imprimir en las columnas*/
                                backgroundColor:[ /*Colores para la grafica, se puede mandar variable de color programado*/
                                        'red',
                                        'blue'
                                        
                                    ],
                                borderWidth:1, /*se le da color del borde de la gráfica o alrededor de la grafica*/
                                borderColor: '#777',
                                hoverBorderWidth:3,
                                hoverBorderColor: 'yellow'
                            }]
                        },
                        options:{
                            scales:{
                                yAxes:[{
                                    ticks:{
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>
</body>
</html>
";

    ?>