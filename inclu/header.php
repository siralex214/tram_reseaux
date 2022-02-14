<?php
require("./inclu/function.php");
require("./inclu/pdo.php");
$errors = [];
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
                        <h1>Connexion</h1>
                        <div id="content_connexion">
                            <img id="img_connexion" src="../assets/img/lock_novalink.png" alt="img_connexion">

                            <form action="" method="POST">
                                <div class="col-3">
                                    <input id="email_connexion" class="effect-2" type="text" placeholder="Placeholder Text">
                                    <span class="focus-border"></span>
                                </div>

                                <p class="error" id="erreur_mail_co"></p>

                                <div class="col-3 input-effect">
                                    <input id="password_connexion" name="password" class="effect-2" type="password"
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
                        </div>
                        <div class="col-3 last_button">
                            <div class="vers_inscription">Pas encore inscrit, <span
                                        style="color: red"> N'hésite plus!</span>
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
                                    <input id="nom_inscription" name="nom" class="effect-2" type="text">
                                    <label>Votre Nom</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <p class="error" id="erreur_nom_inscription">&nbsp;</p>
                                <div class="col-3">
                                    <input class="effect-2" type="text" placeholder="Placeholder Text">
                                    <span class="focus-border"></span>
                                </div>
                                <div class="col-3 input-effect">
                                    <input id="prenom_inscription" name="prenom" class="effect-2" type="text">
                                    <label>Votre Prénom</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <p class="error" id="erreur_prenom_inscription"></p>

                                <div class="col-3 input-effect">
                                    <input id="email_inscription" name="email" class="effect-2" type="text">
                                    <label>Votre Email</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <p class="error" id="erreur_mail_inscription"></p>
                                <div class="col-3 input-effect">
                                    <input id="password_inscription" name="password" class="effect-2" type="password">
                                    <label>Votre mot de passe</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <p class="error" id="erreur_password_inscription"></p>

                                <div class="col-3 input-effect">
                                    <input id="cgu_inscription" name="cgu" class="" type="checkbox">
                                    <label id="label_cgu" for="cgu_inscription">Veuillez accepter les conditions général
                                        d'utilisations</label>
                                    <span class="focus-bg"></span>
                                </div>
                                <p class="error" id="erreur_cgu_inscription"></p>

                                <div class="col-3 submit_div">
                                    <input id="submit_inscription" class="submit_button" type="submit"
                                           value="inscription"
                                           name="submitted">
                                    <span id="error_inscription" class="error">&nbsp;</span>
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
