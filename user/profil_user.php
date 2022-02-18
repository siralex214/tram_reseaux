<?php
require_once '../inclu/function.php';
require_once '../inclu/pdo.php';
require_once '../inclu/pdo.php';

if (isset($_GET['id']) and $_GET['id'] > 0) {
    $getid = intval(($_GET['id']));
    $requser = $pdo->prepare('SELECT * FROM users WHERE id=?');
    $requser->execute(array($getid));
    $user = $requser->fetch();
}
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
    <title> NOVALINK | Mon Profil </title>
</head>

<body id="dashbord">

    <main>

        <div id="centre_graph">
            <div id="nom_graph">
                <a href="./profil_user.php"><img src="../assets/img/home_logo.png" class="dash_logo" width="100%" style="border-radius: 10px 10px 10px 10px; background-color: #58B8AE;
    width: 90%;" alt=""></a>
                <a href="./accueil_user.php"><img src="../assets/img/graphiques_logo.png" class="dash_logo" style="border-radius: 10px 10px 10px 10px" width="100%" alt=""></a>
                <a href=""><img src="../assets/img/darkmode_logo.png" width="100%" class="dash_logo" style="border-radius: 10px 10px 10px 10px" alt=""></a>
                <a href="../login/logout.php"><img src="../assets/img/deco_logo.png" class="dash_logo" style="border-radius: 10px 10px 10px 10px" width="100%" alt=""></a>
            </div>

            <div id="place_graph">

                <h1> DASHBORD | PROFIL</h1>

                <div id="informations_profil">
                    <h5>Profil de <?php echo $user['nom']; ?></h5>
                </div>
            </div>
        </div>
    </main>
</body>

</html>