<?php
require("./inclu/function.php");
require("./inclu/pdo.php");
debug($_POST);

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
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="test.css">
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