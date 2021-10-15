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

      <form action="liste_annonces.php" method="get">
        <div>
          <input type="radio" name="choix" id="Logement" value="Logement" required>
          <label for="Logement">Logement</label>
        </div>
        <div>
          <input type="radio" name="choix" id="Multimedia" value="Multimedia" required>
          <label for="Multimedia">Multimédia</label>
        </div>
        <div>
          <input type="radio" name="choix" id="Vehicule" value="Vehicule" required>
          <label for="Vehicule">Véhicule</label>
        </div>
        <div>
          <input type="radio" name="choix" id="Loisir" value="Loisir" required>
          <label for="Loisir">Loisir</label>
        </div>
        <div>
          <input type="radio" name="choix" id="Service" value="Service" required>
          <label for="Service">Service</label>
        </div>
        <div>
          <input type="radio" name="choix" id="Autre" value="Autre" required>
          <label for="Autre">Autre</label>
        </div>
        <input type="submit" value="Valider" required>
      </form>
    </div> <!-- fin contenu -->
  </div>


  <!-- ******************************************************* -->
  <!--                 PIED DE PAGE                            -->
  <!-- ******************************************************* -->

  <?php
  include_once('outils.php');
  afficheFooter();
  ?>


</body>

</html>