<?php

require_once '../inclu/function.php';
require_once '../inclu/pdo.php';
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../assets/style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
            integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
            defer crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/script/script.js" defer></script>
    <title>NOVALINK | Mon espace |</title>
</head>
<body>
<?php include_once "./inclu/header.php"; ?>
<main style="padding-bottom: 200px">
    <section id="Allchart">
        <section class="one_graph">
            <h2>Protocol de connexion</h2>
            <div style="width: 400px; height: 400px">
                <canvas id="graph1">

                </canvas>
            </div>
        </section>

    </section>
</main>
<?php include_once "./inclu/footer.php" ?>
</body>
</html>
