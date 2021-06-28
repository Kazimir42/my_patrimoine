<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple Invest</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="view/js/chartDashboard.js"></script>
</head>

<body>

    <div class="invest">

        <?php include("view/includes/menuLeft.php"); ?>


        <div class="container">

            <div class="lineTitle">
                <section class="title">
                    <div class="contentTitle">Tableaux de bord</div>
                </section>
            </div>

            <div class="lineChart1">
                <section class="chart1">
                    <div class="contentChart1">
                        <canvas id="myChart" class="" ></canvas>
                    </div>
                </section>

                <section class="chart2">
                    <div class="contentChart2">
                        <canvas id="myChartPie" class=""></canvas>
                    </div>
                </section>
            </div>


            <div class="lineTest"> 
                <section class="test">
                    <div class="contentTest"></div>
                </section>
            </div>
        </div>



    </div>
</body>












<!-- CREATIONS DES CHARTS-->
<script>
    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>

<script>
    var myChart2 = new Chart(
        document.getElementById('myChartPie'),
        configPie
    );
</script>

</html>