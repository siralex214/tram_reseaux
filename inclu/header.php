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
            <i id="fermeture_connexion" class="fas fa-times"></i>
            <div class="container">
                <div class="front side">
                    <div class="content">
                            coté face
                            connexion
                        <button class="vers_inscription">Pas encore inscrit, <span style="color: red"> bah faite le</span></button>
                    </div>
                </div>
                <div class="back side">
                    <div class="content">
                        coté pas face
                        
                        <button class="vers_inscription">Ta déjà un compte <span style="color: red">bah connecte toi batard</span></button>
                        <div class="inscription">
            <h1>Inscription</h1>
            <form action="#" method="post">
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
                    <input type="password" name="mdp"><br><br>
                </div>
                <div class="inscrire-btn">
                    <input type="submit" value="S'inscrire">
                </div>
            </form>
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

<?php
    include("footer.php")
    ?>
    <?php
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=mon_carnet', "root", "root");
    if (!empty($_POST)) {
        if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["date"]) || empty($_POST["email"]) || empty($_POST["mdp"])) {
            echo ("Tous les champs ne sont pas remplis!!!");
        } else {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date = $_POST['date'];
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $role = "user";
            $ver = $pdo->prepare("SELECT * FROM utilisateur WHERE email='$email'");
            $ver->execute();
            $users = $ver->fetch();
            $id = $users['id'];
            if ($users) {
                echo ("L'adresse email est déjà utilisée!");
            } else {
                $req = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, date_de_naissance, email, password, role) VALUES ('$nom', '$prenom', '$date', '$email', '$mdp', '$role')");
                $req->execute();
                $_SESSION['connected'] = true;
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['date_de_naissance'] = $date;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $mdp;
                header('Location: accueil.php');
            }
        }
    }
    ?>