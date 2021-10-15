<!DOCTYPE html> <!-- PAGE : MODELE.HTML -->

<html>

<head>
    <title>Petites annonces - hxxxxx</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ******************************************************* -->
    <!--                 MENU                                    -->
    <!-- ******************************************************* -->

	<div id="page">
        <div id="menu">

            <img src="../assets/images/h99999.jpg" /><br />
            <p>Pr&eacute;nom NOM</p>
            <p>13 rue de toul<br />59000 LILLE<br />03.28.38.48.58<br />
                <a href="mailto:xxxxxx@hei.yncrea.fr">xxx@hei.yncrea.fr</a>
            </p>

            <ul class="menuGauche">
                <li><a href="consulter.html">Consulter</a></li>
                <li><a href="ajouter.php">Ajouter</a></li>
                <li><a href="supprimer.php">Supprimer</a></li>
            </ul>

        </div> <!-- fin menu -->

        <!-- ******************************************************* -->
        <!--                 CONTENU                                 -->
        <!-- ******************************************************* -->

        <div id="contenu">

            <h1>Consulter</h1>

            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Titre</th>
                        <th>Annonce</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $choix = $_GET['choix'];

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

                    if ($result = $mysqli->query("SELECT date,titre,texte,visible FROM annonces JOIN categories ON annonces.IDCategorie=categories.IDcategorie WHERE categories.categorie='$choix'",)) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["visible"] === '1') $class = "visible";
                            else  $class = "hidden";

                            echo '<tr class="' . $class . '">';
                            echo '<td>' . $row['date'] . '</td>';
                            echo '<td>' . $row['titre'] . '</td>';
                            echo '<td>' . $row['texte'] . '</td>';
                            echo '</tr>';
                        }

                        /* Libération du jeu de résultats */
                        $result->close();
                    }
                    ?>
                </tbody>
            </table>


        </div> <!-- fin contenu -->

    </div>

    <!-- ******************************************************* -->
    <!--                 PIED DE PAGE                            -->
    <!-- ******************************************************* -->

    <footer>

        <hr width="80%" />
        <p>HEI - Mise &agrave; jour : 11/10/2016</p>

    </footer> <!-- fin du pied de page -->


</body>

</html>