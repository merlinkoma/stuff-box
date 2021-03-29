<?php

require 'header.php';
$style = "login";
$title = "Log in";

//Récupération des valeurs entrées dans le formulaire après soumission (méthode POST pour cacher le mot de passe) :
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$errors = [];

//Si le formulaire est soumis, vérification que l'email existe dans la BDD :
if(!empty($_POST)){
    //Requête préparée car champs libres, prévient les injections SQL
    $query = $db->prepare('SELECT * FROM user WHERE email = :email');
    $query->execute([':email' => $email]);
    $user = $query->fetch();
    //Idem que pour la requête dans signup.php, le requête renvoie 1 ou 0 réponse puisque l'email doit être unique, donc fetch(), !=fetchAll()

    //Si la requête a renvoyé une réponse, on vérifie ensuite que le mot de passe donné correspond au hash de la BDD
    if($user && password_verify($password, $user['password'])){
        //Connexion à la session :
        $_SESSION['user'] = $user;
        //Redirection
        header('Location: index.php');
    }else{
        $errors['erreur'] = "L'email ou le mot de passe est incorrect";
    }
}

?>

<div class="container">
    <h1>Se connecter</h1>
    <form method="POST">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
        
        <?php if (isset($errors['error'])){ ?>
            <div class="alert alert-danger"><?=$errors['error'] ?></div>
        <?php } ?>
        <button class="btn btn-dark m-1">Connexion</button>
    </form>
</div>

<?php require 'footer.php'; ?>