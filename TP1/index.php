<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once('navbar.php');
    ?>

    <a id="banniere_image" href="article">
        <img src="banniere" alt="">
    </a>

    <section>
        <article>
            <a href=""><img src="" alt=""></a>
            <p>Retour sur mes vacances</p>
        </article>
        <aside>
            <h3>A PROPOS DE L'AUTEUR</h3>
            <img src="P" alt="p">
            <p>Blablabla... Blablabla... Blablabla... Blablabla...</p>
            <div class="reseaux">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </aside>
    </section>

    <?php
    require_once('footer.php');
    ?>
</body>

</html>