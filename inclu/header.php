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
                            <div>
                                <form action="" method="POST">
                                    <div class="col-3 input-effect">
                                        <input name="email" class="effect-23" type="text" placeholder="">
                                        <label>Votre Email</label>
                                        <span class="focus-bg"></span>
                                    </div>

                                    <div class="col-3 input-effect">
                                        <input name="password" class="effect-23" type="password" placeholder="">
                                        <label>Mot de passe</label>
                                        <span class="focus-bg"></span>
                                    </div>
                                    <div class="col-3 submit_div">
                                        <input class="submit_button" type="submit" value="connexion" name="submitted">
                                        <span class="error"><?php viewError($errors, "invalid"); ?> &nbsp;</span>
                                    </div>
                                </form>
                                <div class="col-3 last_button">
                                    <div class="vers_inscription">Pas encore inscrit, <span style="color: red"> N'hésite plus!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- INSCRIPTION -->
                    <div class="back side">
                        <div class="content">

                            <div class="inscription">
                                <h1>Inscription</h1>
                                <form action="" method="post">
                                    <div>
                                        <label for="nom">Nom</label><br>
                                        <input type="text" name="nom"><br>
                                    </div>
                                    <div>
                                        <label for="prenom">Prenom</label><br>
                                        <input type="text" name="prenom"><br><br>
                                    </div>
                                    <div>
                                        <label for="date">Date de naissance</label><br>
                                        <input type="date" name="date"><br><br>
                                    </div>
                                    <div>
                                        <label for="email">Email</label><br>
                                        <input type="email" name="email"><br><br>
                                    </div>
                                    <div>
                                        <label for="mdp">Mot de passe</label><br>
                                        <input type="password" name="password"><br><br>
                                    </div>
                                    <div class="inscrire-btn">
                                        <input type="submit" value="S'inscrire">
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

        <a href="./nous.php">
            <h2 id="quisommesnous">Qui sommes-nous ?</h2>
        </a>
        <a href="./index.php">
            <h2 id="accueil">Accueil</h2>
        </a>
        <a href="./faq.php">
            <h2 id="faq">FAQ</h2>
        </a>


    </div>
</header>