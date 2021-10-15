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

	<?php
	afficheFooter();
	?>


</body>

</html>