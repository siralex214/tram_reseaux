

<?php
require("./inclu/function.php");
require("./inclu/pdo.php");




if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    $requestUtilisateur = $pdo->prepare("SELECT * FROM users WHERE email = '$email' AND password ='$password'");
    $requestUtilisateur->execute();
    $users = $requestUtilisateur->fetch();



    if (!empty($users)) {
        $_SESSION["nom"] = $users["nom"];
        $_SESSION["prenom"] = $users["prenom"];
        $_SESSION["date_de_naissance"] = $users["date_de_naissance"];
        $_SESSION["email"] = $users["email"];
        $_SESSION["password"] = $users["password"];
        $_SESSION["id"] = $users["id"];
        $_SESSION["connected"] = true;
    } else {
        $message_erreur = true;
    }
} else {
    $message_erreur = false;
}
?>

<!-- php inscription -->


<?php
if (!empty($_POST)) {
    if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["date"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        echo ("Tous les champs ne sont pas remplis!!!");
    } else {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $mdp = $_POST['password'];
        $role = "user";
        $ver = $pdo->prepare("SELECT * FROM users WHERE email='$email'");
        $ver->execute();
        $users = $ver->fetch();
        $id = $users['id'];
        if ($users) {
            echo ("L'adresse email est déjà utilisée!");
        } else {
            $req = $pdo->prepare("INSERT INTO users (nom, prenom, date_de_naissance, email, password) VALUES ('$nom', '$prenom', '$date', '$email', '$password',)");
            $req->execute();
            $_SESSION['connected'] = true;
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['date_de_naissance'] = $date;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
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
    <script src="./assets/script/script.js" defer></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> NOVALINK | Page d'accueil |</title>
</head>

<body>
    <?php include_once "./inclu/header.php" ?>

    <main>

    </main>
    <?php include_once "./inclu/footer.php" ?>

</body>

</html>