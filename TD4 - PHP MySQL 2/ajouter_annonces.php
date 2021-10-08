<?php
$choixCategorie = $_POST['categorie'];
$titreAnnonce = $_POST['titre'];
$texteAnnonce = $_POST['texte'];

$servername = "localhost:3306";
$username = "root";
$password = "root";
$database = "td-web";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);
$mysqli->set_charset("utf8mb4");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($result = $mysqli->query("INSERT INTO `td-web`.`annonces` (`titre`, `texte`, `visible`, `photo`, `date`, `IDCategorie`) VALUES ('$titreAnnonce', '$texteAnnonce', '1', '', NOW(), '$choixCategorie');")) {
    /* Libération du jeu de résultats */

    echo 'réussi';
} else {
    echo 'échec';
}
