<?php
require_once "../inclu/function.php";
require_once "../inclu/pdo.php";
$errors = [];
if (!empty($_POST['type'])) {
    if ($_POST['type'] == "connexion") {

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
            echo json_encode("true");
        } else {
            echo json_encode("false");
        }
    } else if ($_POST['type'] == "inscription") {
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
            $errors['email'] = "Cet mail est déjà enregistré";
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
            echo json_encode("true");
        } else {
            echo json_encode($errors);
        }
    }


}



?>