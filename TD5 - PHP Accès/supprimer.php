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
			header("formulaire.php");
		}
		include_once('outils.php');
		afficheMenu();
		?>

		<!-- ******************************************************* -->
		<!--                 CONTENU                                 -->
		<!-- ******************************************************* -->

		<div id="contenu">

			<h1>Supprimer</h1>

			<form method="post">

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

				if ($result = $mysqli->query("SELECT titre,IDAnnonce FROM annonces")) {
					echo '<table class="delete">';
					while ($row = $result->fetch_assoc()) {
						if (isset($_POST[$row['IDAnnonce']])) {
							$ID = $row['IDAnnonce'];
							$mysqli->query("DELETE FROM annonces WHERE IDAnnonce=$ID;");
							echo '<tr>';
							echo '<td>supprimée</td>';
							echo '<td>' . $row['titre'] . '</td>';
							echo '</tr>';
						} else {
							echo '<tr>';
							echo '<td><input type="submit" name="' . $row['IDAnnonce'] . '" value="supprimer" /></td>';
							echo '<td>' . $row['titre'] . '</td>';
							echo '</tr>';
						}
					}
					echo '</table>';

					/* Libération du jeu de résultats */
					$result->close();
				}
				?>

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