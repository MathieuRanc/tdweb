<?php
// Démarre une nouvelle session ou reprend une session existante
session_start();

// recuperation des valeurs du formulaire d'authentifcation
$login = $_POST["username"];
$mdp = $_POST["password"];

// test
if ($login == "mathieu" && $mdp == "123") {
    // authentification réussie
    // création des variables de sessions 
    // auth et nom avec les "bonnes valeurs"
    $_SESSION["auth"] = 1;
    $_SESSION["nom"] = "HEI";
    header("location:consulter.php");
} else {
    // echec à l'authentification
    // création des variables de sessions 
    // auth et nom avec les "mauvaises valeurs"
    $_SESSION["auth"] = 0;
    $_SESSION["nom"] = "";
    header("location:formulaire.php");
}


// bibliothèque

require('outils.php');
