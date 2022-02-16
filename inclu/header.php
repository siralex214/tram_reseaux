<header>
    <div id="nav">
        <!-- MODAL BOUTON CONNECTION -->
        <input id="button" type='checkbox'>

        <label for="switch" class="button" id="button_label">SE CONNECTER</label>

        <div class='modal'>
            <div>
                <i id="fermeture_connexion" class="fas fa-times"></i>
                <div class="container_modal">
                    <div class="front side">
                        <div class="content">
                            <h1>Connexion</h1>
                            <div id="content_connexion">
                                <img id="img_connexion" src="../assets/img/lock_novalink.png" alt="img_connexion">

                                <form class="form_connexion" action="" method="POST">

                                    <div class="col-3">
                                        <input id="email_connexion" class="effect-2" type="text" placeholder="E-mail">
                                        <span class="focus-border" id="focus_connexion_email"></span>
                                    </div>

                                    <p class="error" id="erreur_mail_co">&nbsp;</p>

                                    <div class="col-3">
                                        <input id="password_connexion" class="effect-2" type="text" placeholder="Mot de passe">
                                        <span class="focus-border" id="focus_connexion_password"></span>
                                    </div>
                                    <p class="error" id="erreur_password_co">&nbsp;</p>
                                    <div class="col-3 submit_div">
                                        <input id="submit_connexion" class="submit_button" type="submit" value="connexion" name="submitted">
                                        <span id="error_connexion" class="error"><?php viewError($errors, "invalid"); ?> &nbsp;</span>
                                    </div>


                            </div>

                            <div class="col-3 last_button">
                                <div class="vers_inscription">Pas encore inscrit, <span style="color: black; text-decoration: underline;"> N'hésite plus!</span>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                    <!-- INSCRIPTION -->
                    <div class="back side">
                        <div class="content">

                            <div class="inscription">
                                <h1>Inscription</h1>
                                <form action="" method="post">
                                    <div style="display: flex; flex-direction: column">
                                        <div style="display: flex; justify-content: space-evenly">
                                            <div style="display: flex;flex-direction: column">
                                                <div class="col-3">
                                                    <input id="prenom_inscription" class="effect-2" type="text" placeholder="Prénom">
                                                    <span class="focus-border" id="focus_prenom_inscription"></span>
                                                </div>
                                                <span class="error" id="erreur_prenom_inscription">erreur</span>
                                            </div>
                                            <div style="display: flex;flex-direction: column">
                                                <div class="col-3">
                                                    <input id="nom_inscription" class="effect-2" type="text" placeholder="Nom">
                                                    <span class="focus-border" id="focus_nom_inscription"></span>
                                                </div>
                                                <span class="error" id="erreur_nom_inscription">erreur</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-direction: column">
                                        <div style="display: flex;flex-direction: column">
                                            <div class="col-3" style="width: 500px; margin: 24px auto 0;">
                                                <input id="email_inscription" class="effect-2" type="text" placeholder="Email">
                                                <span class="focus-border" id="focus_email_inscription"></span>
                                            </div>
                                            <span class="error" id="erreur_email_inscription">erreur</span>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <button class="vers_inscription">Ta déjà un compte? <span style="color: red">Connecte toi!</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <ul>
            <li><a href="./nous.php">
                    <h2 id="quisommesnous">Qui sommes-nous ?</h2>
                </a></li>
            <a href="./index.php">
                <h2 id="accueil">Accueil</h2>
            </a>
            <a href="./faq.php">
                <h2 id="faq">FAQ</h2>
            </a>
        </ul>
        

    </div>
</header>