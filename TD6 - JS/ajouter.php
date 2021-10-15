<!DOCTYPE html> <!-- PAGE : MODELE.HTML -->

<html>

<head>
	<title>Petites annonces - hxxxxx</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../style.css">
	<script language="javascript" type="text/javascript" src="mesScripts.js"></script>
</head>

<body>
	<!-- <body onload="afficheMasque('info')"> -->

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

			<h1>Ajouter</h1>

			<img src="../assets/images/LOGO_HEI.jpg" onmouseover="this.src='../assets/images/yncrea.png'" onmouseout="this.src='../assets/images/LOGO_HEI.jpg'" />

			<p id="info">Entrez les informations dans les champs pour ajouter une annonce</p>

			<button onclick="afficheMasque('info')" id="BTN" value="Afficher les astuces">Afficher/cacher</button>

			<form method="post">
				<label for="categorie">Catégorie</label>
				<select name="categorie" id="categorie">
					<?php
					$servername = "localhost:3306";
					$username = "root";
					$password = "root";
					$database = "td-web";

					$mysqli = new mysqli($servername, $username, $password, $database);
					$mysqli->set_charset("utf8mb4");

					if ($mysqli->connect_error) {
						die("Connection failed: " . $mysqli->connect_error);
					}

					if ($result = $mysqli->query("SELECT categorie,IDCategorie FROM categories",)) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="' . $row['IDCategorie'] . '">' . $row['categorie'] . '</option>';
						}
						$result->close();
					}
					?>
				</select>
				<label for="titre">Titre</label>
				<input type="text" name="titre" id="titre" placeholder="Titre">
				<label for="texte">Texte</label>
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