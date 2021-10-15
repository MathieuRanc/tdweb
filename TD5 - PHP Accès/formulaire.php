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
        include_once('outils.php');
        afficheMenu();
        ?>
        <!-- ******************************************************* -->
        <!--                 CONTENU                                 -->
        <!-- ******************************************************* -->

        <div id="contenu">
            <h1>Authentification</h1>

            <form action="authentification.php" method="post">
                <label for="Logement">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" required>
                <label for="Multimedia">Mot de passe</label>
                <input type="password" name="password" id="password" required>
                <input type="submit" value="Valider" required>
            </form>
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