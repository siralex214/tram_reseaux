<?php
require_once '../inclu/function.php';
require_once '../inclu/pdo.php';
?>


<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" defer crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/script/script.js" defer></script>
    <title>NOVALINK | Mon espace |</title>
</head>

<body id="dashbord">

    <main>


        <div id="centre_graph">
            <div id="nom_graph">
                <a href=""><i class="fas fa-id-card-alt" ></i></a>
                <a href="./accueil_user.php"><i class="fas fa-chart-pie"></i></a>
                <a href=""><i class="fa-solid fa-moon"></i></a>
                <a href=""><i class="fa-solid fa-power-off"></i></a>
            </div>
            <div id="place_graph">

                <h1>DASHBORD | GRAPHIQUES</h1>
                <div class="graphique_dash">
                    <section id="Allchart">
                        <section class="one_graph">
                            <h2>PROTOCOLE DE CONNECTION</h2>
                            <div style="width: auto;">
                                <canvas id="graph1">
                                </canvas>
                            </div>
                        </section>
                    </section>
                    <section id="chart2">
                        <section class="two_graph">
                            <h2>ETAT DES SERVEURS</h2>
                            <div style="width: auto;">
                                <canvas id="graph2">

                                </canvas>
                            </div>
                        </section>
                    </section>
                </div>
                <div class="graphique_dash">

                    <section id="chart3">
                        <section class="trois_graph">
                            <h2>PORT DE DEPART</h2>
                            <div style="width: auto;">
                                <canvas id="graph3">

                                </canvas>
                            </div>
                        </section>
                    </section>
                    <section id="chart4">
                        <section class="quatre_graph">
                            <h2>PORT D'ARRIVEE</h2>
                            <div style="width: auto;">
                                <canvas id="graph4">

                                </canvas>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>

</html>