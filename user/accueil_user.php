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

<body>
    <?php include_once "./inclu/header.php"; ?>
    <main>
        <div class="labox">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#279b8f" fill-opacity="1" d="M0,288L80,261.3C160,235,320,181,480,181.3C640,181,800,235,960,261.3C1120,288,1280,288,1360,288L1440,288L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
            </svg>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet">
            <button class="style-1">Trames ⚡</button>
            <button class="style-2">Reseaux ⚡</button>
            <button class="style-3">Statistique ⚡</button>

            <section id="Allchart">
                <section class="one_graph">
                    <h2>Protocol de connexion</h2>
                    <div style="width: 400px; height: 400px">
                        <canvas id="graph1">
                        </canvas>
                    </div>
                </section>
            </section>
            <section id="chart2">
                <section class="two_graph">
                    <h2>etat des serveurs</h2>
                    <div style="width: 400px; height: 400px">
                        <canvas id="graph2">

                        </canvas>
                    </div>
                </section>
            </section>
            <section id="chart3">
                <section class="trois_graph">
                    <h2>Port de depart</h2>
                    <div style="width: 400px; height: 400px">
                        <canvas id="graph3">

                        </canvas>
                    </div>
                </section>
            </section>
            <section id="chart4">
                <section class="quatre_graph">
                    <h2>Port de arriver</h2>
                    <div style="width: 400px; height: 400px">
                        <canvas id="graph4">

                        </canvas>
                    </div>
                </section>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#279b8f" fill-opacity="1" d="M0,32L80,69.3C160,107,320,181,480,181.3C640,181,800,107,960,69.3C1120,32,1280,32,1360,32L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </main>
    <?php include_once "./inclu/footer.php" ?>
</body>

</html>