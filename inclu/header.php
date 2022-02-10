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
                $errors['invalid'] = "Mot de passe ou email incorrect!";
            }
        } else {
            $errors['invalid'] = "Mot de passe ou email incorrect!";
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

    } else if ($_POST['submitted'] == "inscription") {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = xss($value);
        }
        $errors = validEmail($errors, $_POST['email'], "email");
//        $errors = validText($errors, $_POST['password'], 'password', 4, 20);
        $errors = validText($errors, $_POST['nom'], 'nom', 1, 255);
        $errors = validText($errors, $_POST['prenom'], 'prenom', 1, 255);

        if (empty($_POST['cgu'])) {
            $errors['cgu'] = "Veuillez acceptez les conditions général d'utilisation";
        }
// detection d'un mail dejà présent dans la table
        $query = $pdo->prepare("SELECT email FROM users WHERE email = :email");
        $query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        if ($result) {
            $errors['double_mail'] = "Cet mail est déjà enregistré";
        }


//regex mdp
// var_dump($_POST['mdp']);
        $pattern = "#(?=^.{8,}$)((?=.*\d)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$#";
        if (!preg_match($pattern, $_POST['password'])) {
            $errors['password'] = "Mot de passe non réglementaire.";
        }
        if (!isset($_POST['cgu'])) {
            $errors['cgu'] = "Veuillez accepter les conditions général d'utilisation.";
        }
        debug($errors);

        if (count($errors) === 0) {
//hash password
            $mdp = password_hash($_POST['password'], PASSWORD_ARGON2I);
// traitement pdo
            $sql = "INSERT INTO `users`(`nom`, `prenom`,`email`, `password`) VALUES (:nom, :prenom, :mail ,:mdp) ";
            $query = $pdo->prepare($sql);
            $query->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
            $query->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
            $query->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
            $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $query->execute();
            $registration = true;
        }
    }


}
?>

<header>
    <div id="nav">

        <div id="triangle">
            <img src="./assets/img/logo_novalink.png" id="logo" alt="logo" width="50px">
        </div>

        <div id="ligne1"></div>
        <div id="ligne2"></div>

    </div>
    <input id="button" type='checkbox'>

    <label for="switch" class="button" id="button_label">Se connecter</label>

    <div class='modal'>
        <div>
            <i id="fermeture_connexion" class="fas fa-times"></i>
            <div class="container_modal">
                <div class="front side">
                    <div class="content">
                        <div>
                            <h1>Connexion</h1>

                            <form action="" method="POST">
                                <div class="col-3 input-effect">
                                    <input id="email_connexion" name="email" class="effect-23" type="text"
                                           placeholder="">
                                    <label>Votre Email</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <p class="error" id="erreur_mail_co"></p>

                                <div class="col-3 input-effect">
                                    <input id="password_connexion" name="password" class="effect-23" type="password"
                                           placeholder="">
                                    <label>Mot de passe</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <p class="error" id="erreur_password_co"></p>
                                <div class="col-3 submit_div">
                                    <input id="submit_connexion" class="submit_button" type="submit" value="connexion"
                                           name="submitted">
                                    <span id="error_connexion" class="error"><?php viewError($errors, "invalid"); ?> &nbsp;</span>
                                </div>
                            </form>
                            <div class="col-3 last_button">
                                <div class="vers_inscription">Pas encore inscrit, <span style="color: red"> N'hésite plus!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back side">
                    <div class="content">

                        <div class="inscription">
                            <h1>Inscription</h1>
                            <form action="" method="post">
                                <div class="col-3 input-effect">
                                    <input id="nom_inscription" name="nom" class="effect-23" type="text">
                                    <label>Votre Nom</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <div class="col-3 input-effect">
                                    <input id="prenom_inscription" name="prenom" class="effect-23" type="text">
                                    <label>Votre Prénom</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <div class="col-3 input-effect">
                                    <input id="email_inscription" name="email" class="effect-23" type="text">
                                    <label>Votre Email</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <div class="col-3 input-effect">
                                    <input id="password_inscription" name="password" class="effect-23" type="password">
                                    <label>Votre mot de passe</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <div class="col-3 input-effect">
                                    <input id="cgu_inscription" name="cgu" class="" type="checkbox">
                                    <label id="label_cgu" for="cgu_inscription">Veuillez accepter les conditions général d'utilisations</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <div class="col-3 submit_div">
                                    <input id="submit_inscription" class="submit_button" type="submit"
                                           value="inscription"
                                           name="submitted">
                                    <span id="error_inscription" class="error"><?php viewError($errors, "invalid"); ?> &nbsp;</span>
                                </div>
                            </form>
                            <br>
                            <button class="vers_inscription">Ta déjà un compte? <span
                                        style="color: red">Connecte toi!</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <a href="">
        <h2 id="quisommesnous" class="button">Qui sommes-nous ?</h2>
    </a>
    <a href="">
        <h2 id="accueil" class="button">Accueil</h2>
    </a>
    <a href="">
        <h2 id="faq" class="button">FAQ</h2>
    </a>


    <div id="tourne"></div>
    <div id="tourner"></div>

    <div id="point_lumineux">
        <p>&nbsp;</p>
    </div>
    <div id="point_lumineux2">
        <p>&nbsp;</p>

    </div>
    <div id="rond1"></div>
    <div id="cercle1"></div>

</header>
