<!DOCTYPE html> <!-- PAGE : MODELE.HTML -->

<html>

<head>
    <title>Petites annonces - hxxxxx</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <!-- ******************************************************* -->
    <!--                 MENU                                    -->
    <!-- ******************************************************* -->

    <div id="page">
        <?php
		session_start();
        if (!isset($_SESSION["auth"]) || $_SESSION["auth"] == 0) {
            header("location:formulaire.php");
        }
        include_once('outils.php');
        afficheMenu();
        ?>

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
    <?php
    afficheFooter();
    ?>



</body>

</html>