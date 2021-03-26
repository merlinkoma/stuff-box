<?php

//En cas de redirection trop bas dans la page, pour éviter une erreur :
ob_start();
$style = "signup";
$title = "Sign up";

//Le header inclut la connexion à la DB
@include './header.php';

//Si les champs ne sont pas renseignés sur la page, les variables sont vides.
$firstname = $_POST['firstname'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$cf_password = $_POST['cf-password'] ?? '';

//Vérification de l'envoi (submit sur le button)
if (!empty($_POST)) {

    //Vérification de la longueur du prénom
    if (strlen($firstname) < 2) {
        $errors['firstname'] = "Le prénom doit faire au moins 2 caractères";
    }

    //Vérification de la longueur du nom de famille
    if (strlen($lastname) < 2) {
        $errors['lastname'] = "Le nom de famille doit faire au moins 2 caractères";
    }

    //Vérification de l'email : filter_var renvoie true quand l'email passe le filtre. Si !filter_var... -> ajout d'une erreur dans le tableau.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email invalide.";
    }

    //Vérification que l'email est unique dans la BDD.
    //Requête préparé pour bloquer les injections SQL lors de larequête à la BDD.
    $query = $db->prepare('SELECT * from user WHERE email = :email');
    //fetch() et non fetchAll() car il ne peut y avoir au maximum qu'une seule réponse puisqu'on empêche l'ajout d'un email doublon
    $query->execute([':email' => $email]);
    $user = $query->fetch();
    //$user n'existe que si la requête a renvoyé une réponse.
    if ($user) {
        //Nb : on peut utiliser l'index 'email' dans le tableau d'erreurs car si on arrive à cette étape, c'est que l'email est valide donc on n'écrase pas une erreur précédente au même index.
        $errors['email'] = "L'email est déjà utilisé.";
    }

    //Vérification de la longueur du mot de passe.
    if (strlen($password) < 6) {
        $errors['password'] = "Le mot de passe doit faire au moins 6 caractères";
    }

    //Vérification du mot de passe.
    if ($password !== $cf_password) {
        $errors['password'] = "Les mots de passe ne sont pas identiques.";
    }

    //S'il n'y a aucune erreur dans le tableau, on ajoute le nouvel user à la BDD.
    if (empty($errors)) {
        //Requête préparée pour empêcher les injections SQL lors de la requête à la BDD
        $query = $db->prepare('INSERT INTO user (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)');
        //password_hash() = méthode qui permet de ne pas stocker de mot de passe en clair dans la BDD.
        //Nb : un mot de passe oublié ne peut pas être récupéré.
        $query->execute([':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':password' => password_hash($password, PASSWORD_DEFAULT)]);

        //On récupère le nouvel user pour le connecter.
        $user = $db->query('SELECT * FROM user WHERE email = "' . $email . '"')->fetch();

        //Vérifier qu'il y a bien un session_start() quelque part (ici sur le header required en haut du fichier).
        $_SESSION['user'] = $user;

        //On redirige ensuite l'utilisateur vers la page d'accueil.
        //Nb : s'il y a une erreur, vérifier la présente du ob_start() en haut du fichier.
        header('Location: index.php');
    }
}

?>
<div class="px-4 py-4 signup">
    <!-- Méthode POST pour cacher en partie les données sensibles (mot de passe) -->
    <form action="" method="POST">

        <h1 class="display-6">Créer un compte</h1>

        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname" class="form-control" value="<?= $firstname; ?>">
        <?php if (isset($errors['firstname'])) { ?>
            <div class="alert alert-danger"><?= $errors['firstname'] ?></div>
        <?php } ?>

        <label for="lastname">Nom de famille</label>
        <input type="text" name="lastname" id="lastname" class="form-control" value="<?= $lastname; ?>">
        <?php if (isset($errors['lastname'])) { ?>
            <div class="alert alert-danger"><?= $errors['firstname'] ?></div>
        <?php } ?>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= $email; ?>">
        <?php if (isset($errors['email'])) { ?>
            <div class="alert alert-danger"><?= $errors['email'] ?></div>
        <?php } ?>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">

        <label for="cf-password">Confirmer le mot de passe</label>
        <input type="password" name="cf-password" id="cf-password" class="form-control">
        <?php if (isset($errors['password'])) { ?>
            <div class="alert alert-danger"><?= $errors['password'] ?></div>
        <?php } ?>

        <button class="btn btn-dark m-2">Envoyer</button>
    </form>
</div>
<?php @include './footer.php ' ?>
</body>

</html>