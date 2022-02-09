<header>

    <div id="nav">

        <div id="triangle">
            <img src="./assets/img/logo_novalink.png" id="logo" alt="" width="68px">
        </div>

        <div id="ligne1"></div>
        <div id="ligne2"></div>
        <div id="ligne3"></div>
        <div id="ligne4"></div>

        <div id="rond1"></div>
        <div id="cercle1"></div>

        <input id="button" type='checkbox'>
        <label id="button_label">Connexion</label>
        <div class='modal'>
            <div>
            <i id="fermeture_connexion" class="fas fa-times"></i>
            <div class="container">
                <div class="front side">
                    <div class="content">
                        <div>
                            <form action="" method="POST">
                                <h1>Connexion</h1>
                                <br>
                                <input type="mail" name="email" placeholder="Adresse Mail" class="connex"> <br>
                                <input type="password" name="password" placeholder="Mot de passe" class="connex"><br>
                                <input type="submit" value="Valider" class="valider"><br>
                                <?php
                                if ($message_erreur == true) {
                                    echo "<p class='message_erreur'>Utilisateur ou Mot de passe inconnu</p>";
                                } ?>
                            </form>
                            <button class="vers_inscription">Pas encore inscrit, <span style="color: red"> N'hesite plus!</span></button>
                        </div>
                    </div>
                </div>
                <div class="back side">
                    <div class="content">

                        <div class="inscription">
                            <h1>Inscription</h1>
                            <form action="" method="post">
                                <div class="nomprenom">
                                    <div>
                                        <label for="nom">Nom</label><br>
                                        <input type="text" name="nom"><br>
                                    </div>
                                    <div>
                                        <label for="prenom">Prenom</label><br>
                                        <input type="text" name="prenom"><br><br>

                                    </div>
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
                            <button class="vers_inscription">Ta déjà un compte? <span style="color: red">Connecte toi!</span></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <h2 id="quisommesnous">Qui sommes-nous ?</h2>
    <h2 id="accueil">Accueil</h2>

    <div id="tourne"></div>
    <div id="tourner"></div>

    <div id="point_lumineux">
        <p>&nbsp;</p>
    </div>
    <div id="point_lumineux2">
        <p>&nbsp;</p>
    </div>


    </div>


    </div>

    </div>

</header>