<?php

function cnxDB($servername, $username, $password, $database = null)
{
    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $database);
    $mysqli->set_charset("utf8mb4");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    return  $username;
}

function afficheFooter()
{
    echo '<footer><hr width="80%" /><p>HEI - Mise &agrave; jour : ' . date("j/n/Y") . '</p></footer>';
}

function afficheMenu()
{
    echo '
<div id="menu">
<img src="../assets/images/h99999.jpg" /><br />
<p>Pr&eacute;nom NOM</p>
<p>13 rue de toul<br />59000 LILLE<br />03.28.38.48.58<br />
<a href="mailto:xxxxxx@hei.yncrea.fr">xxx@hei.yncrea.fr</a>
</p>
<ul class="menuGauche">
<li><a href="consulter.php">Consulter</a></li>
<li><a href="ajouter.php">Ajouter</a></li>
<li><a href="supprimer.php">Supprimer</a></li>
</ul>';
    if (isset($_SESSION["auth"]) && $_SESSION["auth"] != 0) {
        echo '<a href="disconnect.php">Déconnection</a>';
    }
    echo '</div>';
}
