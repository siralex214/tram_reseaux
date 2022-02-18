<header>
    
    <ul id="ul_deux">
        <li class="bouton_li_header"><a href="./index.php">Accueil</a></li>
        <li class="bouton_li_header"><a href="./nous.php">Qui sommes-nous ?</a></li>
    </ul>
    <img src="./assets/img/logo_novalink.png" alt="logo">
    <ul>
        <input id="button" type='checkbox'>
        <li><label for="switch" class="button" id="button_label">SE CONNECTER</label></li>

        <div class='modal'>
            <div>
                <i id="fermeture_connexion" class="fas fa-times"></i>
                <div class="container_modal">
                    <div class="front side">
                        <div class="content">
                            <h1>Connexion</h1>
                            <div id="content_connexion">
                                <img id="img_connexion" src="./assets/img/lock_novalink.png" alt="img_connexion">

                                <form class="form_connexion" action="" method="POST">

                                    <div class="col-3">
                                        <input id="email_connexion" class="effect-2" type="text" placeholder="E-mail">
                                        <span class="focus-border" id="focus_connexion_email"></span>
                                    </div>

                                    <p class="error" id="erreur_mail_co">&nbsp;</p>

                                    <div class="col-3">
                                        <input id="password_connexion" class="effect-2" type="password" placeholder="Mot de passe">
                                        <span class="focus-border" id="focus_connexion_password"></span>
                                    </div>
                                    <p class="error" id="erreur_password_co">&nbsp;</p>
                                    <div class="col-3 submit_div">
                                        <input id="submit_connexion" class="submit_button" type="submit" value="connexion" name="submitted">
                                        <span id="error_connexion" class="error"><?php viewError($errors, "invalid"); ?> &nbsp;</span>
                                    </div>


                            </div>

                            <div class="col-3 last_button">
                                <div class="vers_inscription">Pas encore de compte ? <span style="color: #FBA43B; text-decoration: underline;"> Inscrivez-vous</span>
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
                                                <span class="error" id="erreur_prenom_inscription">&nbsp;</span>
                                            </div>
                                            <div style="display: flex;flex-direction: column">
                                                <div class="col-3">
                                                    <input id="nom_inscription" class="effect-2" type="text" placeholder="Nom">
                                                    <span class="focus-border" id="focus_nom_inscription"></span>
                                                </div>
                                                <span class="error" id="erreur_nom_inscription">&nbsp;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="display: flex; flex-direction: column; align-items: center;">
                                        <div style="display: flex;flex-direction: column">
                                            <div class="col-3" style="width: 500px; margin: 24px auto 0;">
                                                <input id="email_inscription" class="effect-2" type="text" placeholder="Email">
                                                <span class="focus-border" id="focus_email_inscription"></span>
                                            </div>
                                            <span class="error" id="erreur_mail_inscription">&nbsp;</span>
                                        </div>
                                        <div style="display: flex;flex-direction: column">
                                            <div class="col-3" style="width: 500px; margin: 24px auto 0;">
                                                <input id="password_inscription" class="effect-2" type="password" placeholder="Mot de passe">
                                                <span class="focus-border" id="focus_password_inscription"></span>
                                            </div>
                                            <span class="error" id="erreur_password_inscription">&nbsp;</span>
                                        </div>
                                        <div style="display: flex;flex-direction: column">
                                            <div class="col-3" style="width: 500px; margin: 24px auto 0;">
                                                <input id="cgu_inscription" class="effect-2" type="checkbox">
                                                <label id="label_cgu" for="cgu_inscription">Veuillez accepter les conditions générales d'utilisations</label>
                                            </div>
                                        </div>
                                        <div class="col-3 submit_div">
                                            <input id="submit_inscription" class="submit_button" type="submit" value="inscription" name="submitted">
                                            <span id="error_inscription" class="error"> &nbsp;</span>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <div class="vers_inscription">Vous avez déjà un compte? <span style="color: #FBA43B; text-decoration: underline;">Connectez-vous</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </ul>



</header>