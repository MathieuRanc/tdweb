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

			<h1>Ajouter</h1>

			<form method="post">
				<select name="categorie" id="categorie">
					<?php
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

					if ($result = $mysqli->query("SELECT categorie,IDCategorie FROM categories",)) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="' . $row['IDCategorie'] . '">' . $row['categorie'] . '</option>';
						}
						/* Libération du jeu de résultats */
						$result->close();
					}
					?>
				</select>

				<input type="text" name="titre" id="titre" placeholder="Titre">

				<textarea name="texte" id="texte" cols="30" rows="10" placeholder="Texte"></textarea>

				<input type="submit" value="Ajouter">
			</form>

			<?php
			if (isset($_POST['categorie']) && isset($_POST['titre']) && isset($_POST['texte'])) {
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

				if ($result = $mysqli->query("INSERT INTO `annonces` (`titre`, `texte`, `visible`, `photo`, `date`, `IDCategorie`) VALUES ('$titreAnnonce', '$texteAnnonce', '1', '', NOW(), '$choixCategorie');")) {
					/* Libération du jeu de résultats */
					echo 'L\'annonce a bien été crée';
				}
			}

			?>



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