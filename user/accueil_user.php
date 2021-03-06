<?php
require_once '../inclu/function.php';
// require_once '../inclu/pdo.php';
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
    <title>NOVALINK | Graphiques</title>
</head>

<body id="dashbord">

   <!-- DARK MODE START -->
   <div class="toggle_qsn">
        <input type="checkbox" name="" id="dark-mode" class="checkbox_qsn">
        <label for="dark-mode" class="label_qsn">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball_qsn"></div>
        </label>
    </div>
<!-- DARK MODE END -->

<main>

        <div id="centre_graph">

            <div id="nom_graph">
                <img src="../assets/img/logo_novalink.png" width="50%" style="margin-left: auto; margin-right:auto; margin-bottom:50px" alt="">
                <a href="./accueil_user.php"><img src="../assets/img/graphiques_logo.png" class="dash_logo" style="border-radius: 10px 10px 10px 10px; background-color: #58B8AE; width: 90%;" width="100%" alt=""></a>
                <a href=""><img src="../assets/img/darkmode_logo.png" width="100%" class="dash_logo" style="border-radius: 10px 10px 10px 10px" alt=""></a>
                <a href="../login/logout.php"><img src="../assets/img/deco_logo.png" class="dash_logo" style="border-radius: 10px 10px 10px 10px" width="100%" alt=""></a>
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

                    <section id="chart4">
                        <section class="quatre_graph">
                            <h2>PERTE DE PAQUETS</h2>
                            <div style="width: auto;">
                                <canvas id="graph4">

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
            </div>
        </div>
    </main>
</body>

</html>