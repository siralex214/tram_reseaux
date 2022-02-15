<?php
require("./inclu/function.php");
require("./inclu/pdo.php");


$errors = [];

if (!empty($_POST['submitted'])) {

    if ($_POST['submitted'] == "connexion") {

        foreach ($_POST as $key => $value) {
            $_POST[$key] = xss($value);
        }
        $errors = validEmail($errors, $_POST['email'], "email");
        $errors = validText($errors, $_POST['password'], 'password', 4, 20);

        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        //condition pour verifier si le mail et le mot de passe sont dans la base de données
        if ($result) {
            $user = $result;
            if (!password_verify($_POST['password'], $user['password'])) {
                $errors['invalid'] = "Votre email ou votre pwd sont incorrects!";
            }
        } else {
            $errors['invalid'] = "Votre email ou votre pwd sont incorrects!";
        }
        if (count($errors) === 0) {
            // tout c'est bien passé
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['connecter'] = 'oui';
            //condition qui n'autorise la connexion qu'au personne avec un role défini
        }
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="test.css">
    <script src="./assets/script/script.js" defer></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
    <title> NovaLinK | Page d'accueil </title>
</head>

<body>

    <?php include_once "./inclu/header.php" ?>
    <main style="padding-bottom: 300px;">
        <img src="./assets/img/fond_novalink.png" alt="background" width="100%">

        <h1 class="animate-text"> LES SPECIALISTES DE L'ANALYSE RESEAU SUR LE WEB</h1>


        <a href="#bloc_accueil_texte">
            <h2 id="en_savoir_plus" class="button">En savoir plus</h2>
        </a>

        <h1 id="titre_bloc_accueil_texte"> POURQUOI UTILISER NOVALINK ?</h1>
        <div id="bloc_accueil_texte">

            <div class="accueil_texte">
                <center><img src="./assets/img/vue_ensemble.png" alt="" width="50%"></center>
                <h3>BENEFICIER D'UNE VUE D'ENSEMBLE SUR VOTRE RESEAU</h3>
                <p>En administrateur responsable que vous êtes, vous aimeriez disposer d’une vue d’ensemble sur la quantité de trafic qui transite par votre réseau. NOVALINK vous permet d’optimiser la planification des capacités réseau. Vous pouvez également vérifier si l’intégralité de votre forfait de transmission de données est effectivement consommée et ainsi déterminer s’il vous faut acheter davantage de capacités ou si vous pouvez vous accommoder de ce que vous avez.
                </p>

            </div>
            <div class="accueil_texte">
                <center><img src="./assets/img/analyser_reseau.png" alt="" width="50%"></center>
                <h3>ANALYSER UN RESEAU</h3>
                <p>La connexion Internet de votre entreprise est de moins en moins fiable ? Votre réseau rencontre des erreurs dont vous ignorez la cause ? Avec NOVALINK, vous disposez d’un outil de supervision du trafic réseau qui analyse votre consommation de données et met au jour les causes des problèmes qui perturbent votre réseau. Il vous permettra par ailleurs d’identifier les goulots d’étranglement et les failles de sécurité. Vous trouverez plus d’informations sur la sécurité réseau ici.
                </p>

            </div>
            <div class="accueil_texte">
                <center><img src="./assets/img/optimiser_reseau.png" alt="" width="50%"></center>
                <h3>OPTIMISER UN RESEAU</h3>
                Tous les réseaux sont phagocytés par de gros consommateurs de bande passante. Cela peut venir d’une application précise, d’un flux vidéo comme d’un réseau WLAN saturé, mais peut aussi être dû à un problème autrement plus bête, comme une tâche d’impression en attente contenant des fichiers très lourds qui bouchent transitoirement le réseau. NOVALINK vous permet d’identifier les programmes et éléments qui accaparent votre bande passante et donc de mieux maîtriser votre consommation de données.</p>

            </div>

        </div>

        <div id="bloc_accueil_texte_deux">
            <div id="telephone">
                <img src="./assets/img/iphone.png" alt="iphone6" height="100%">
            </div>
            <div id="text_telephone">
                <h3> <mark> TRAVAILLER OU ON VEUT </mark> </h3>
                <h3> <mark> D'OU L'ON VEUT </mark></h3>
                <p>Notre équipe utilise un pool de technos pour répondre au plus près de vos besoins. Le site est adaptée sur MAC, Windows, Smartphones, Tablettes & autres outils numériques pour un confort d'utilisation optimal. Une application dédiée est disponible dès maintenant.</p>
                <a href="https://download.fr"><img src="./assets/img/google_app.png" alt="google_play_store" width="50%"></a>
            </div>
            <div id="ordi">
                <img src="./assets/img/ordi.jpg" alt="ordinateur" height="100%">
            </div>
        </div>
        <div id="bloc_accueil_texte_trois">
            <h1>LES AVIS DE NOS UTILISATEURS</h1>
            <figure class="icon-cards mt-3">
                <div class="icon-cards__content">
                    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
                            <h5>Pauline THOMAS</h5> DESIGN FLUIDES, GRAPHIQUES RAFFINES <br> ⭐⭐⭐⭐ <br> <br> Depuis que j'utilise cet analyseur de reseau, je n'ai plus aucun problemes de gestion de ce dernier. Un grand merci ! Les designs sont vraiment magnifiques & le site est très moderne ça change 😅
                        </span></div>
                    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
                            <h5>Roger FERNANDEZ</h5> UNE FACILITE D'UTILISATION <br> ⭐⭐⭐⭐⭐ <br> <br> Tout est assez clair, moi qui suis pas très futé sur le web. Mon voisin n'a du m'expliquer qu'une seule fois le fonctionnement. Je valide !
                        </span></div>
                    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
                            <h5>Christophe CARON</h5> LE TOP POUR TRAVAILLER A DISTANCE <br> ⭐⭐⭐⭐⭐ <br> <br> Avec le covid, c'était beaucoup trop compliqué pour moi de gérer. heureusement il y a même une interface mobile lié. C'est vraiment génial. 🔌
                        </span></div>
                </div>
            </figure>
        </div>

        <div id="bloc_accueil_texte_quatre">
            <div class="accueil_texte_quatre" id="text_left">
                <h1>Des forfaits <br> pour chaque <br> besoin</h1>

            </div>
            <div class="accueil_texte_quatre">
                <div id="header_card_accueil_left">
                    <h2>BASIQUE</h2>
                    <h3>GRATUIT</h3>
                </div>
                <div id="card_accueil_left">
                <h5>Inclus:</h5>
                    <ul>
                        <li>✅ Affichage des LOGS</li>
                        <li>✅ Affichage des LOGS</li>
                        <li>✅ Affichage des LOGS</li>
                        <li>✅ Affichage des LOGS</li>
                    </ul>
                    <a href=""><button>OBTENIR</button></a>
                </div>
            </div>
            <div class="accueil_texte_quatre">
                <div id="header_card_accueil_right">
                    <h2>PACK PRO (Bientôt disponible)</h2>
                    <h3>19.99€</h3>
                </div>
                <div id="card_accueil_right">
                    <h4>Inclus:</h4>

                    <ul>
                        <li>✅ Affichage des LOGS</li>
                        <li>✅ Affichage des trames par type de requête</li>
                        <li>✅ Affichage des LOGS</li>
                        <li>✅ Affichage des LOGS</li>
                    </ul>
                    <a href=""><button>OBTENIR</button></a>
                </div>
            </div>
        </div>
<script>
    function classToggle() {
    var el = document.querySelector('.icon-cards__content');
    el.classList.toggle('step-animation');
}

document.querySelector('#toggle-animation').addEventListener('click', classToggle);
</script>
    </main>

    <?php include_once "./inclu/footer.php" ?>

</body>

</html>