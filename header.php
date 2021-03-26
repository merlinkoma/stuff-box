<?php
session_start();
require __DIR__ . '/database/database.php';
$style = "header";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/body.css">
    <link rel="stylesheet" href="./style/<?= $style ?>.css">
    <title><?= $title ?></title>
</head>

<body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand fs-3 text ms-4" href="index.php">Merlin's Stuff Box</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="library.php">Bibliothèque de prêt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">A vendre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">A donner</a>
                        </li>

                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Connexion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Se connecter</a></li>
                                <li><a class="dropdown-item" href="./signup.php">Créer un compte</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Administration</a></li>
                            </ul>
                        </li>

                        <button type="button" class="btn btn-dark">Changer la langue</button>

                    </ul>
                </div>
            </nav>
            <img src="./img/forest.jpg" id="banner" alt="">
        </header>
    