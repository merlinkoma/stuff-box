<?php

//session_start() car on appelle pas le header (on redirige tout de suite après la déconnection).
session_start();

//Déconnexion :
unset($_SESSION['user']);

//Redirection :
header('Location: index.php');

