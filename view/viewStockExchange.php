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
</head>

<body>

    <div class="invest">

        <?php include("view/includes/menuLeft.php"); ?>


        <div class="container">

            <div class="lineTitle">
                <section class="title">
                    <div class="contentTitle">Bourse</div>
                </section>
            </div>

            <div class="lineChart1">
                <section class="chart1">
                    <div class="contentChart1">
                        <canvas id="myChart" class=""></canvas>
                    </div>
                </section>

                <section class="chart2">
                    <div class="contentChart2">
                        <canvas id="myChartPie" class=""></canvas>
                    </div>
                </section>
            </div>


            <div class="lineAdd">
                <section class="add">
                    <div class="contentAdd"></div>
                </section>

                <section class="recap">
                    <div class="contentRecap">

                        <table class="tableRecap">
                            <tbody>
                                <tr>
                                    <td>Nom</td>
                                    <td>Type</td>
                                    <td>Date de création</td>
                                    <td>Derniere modif</td>
                                    <td>Nombre d'actions</td>
                                    <td>Valeur total (€)</td>
                                </tr>
                                <?php foreach ($allPortefeuille as $key) { ?>
                                <tr>
                                    <td class="nomPortefeuille"><?= $key->nom ?></td>
                                    <td><?= $key->type ?></td>
                                    <td><?= $key->date_creation ?></td>
                                    <td><?= $key->date_derniere_modif ?></td>
                                    <td><?= $key->nombre_action ?></td>
                                    <td class="totalPortefeuille"><?= $key->valeur_total ?></td>
                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </section>
            </div>


        </div>
    </div>
</body>











<script src="view/js/chartStockExchange.js"></script>

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