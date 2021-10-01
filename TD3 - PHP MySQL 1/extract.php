<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table>
    <?php
    $servername = "mathieuranc.fr";
    $username = "cpzl6748_tdweb";
    $password = "SuperMotDePasse123";
    $database = "cpzl6748_tdweb";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $database);
    $mysqli->set_charset("utf8mb4");

    // Check connection
    if ($mysqli->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if ($result = $mysqli->query("SELECT titre FROM annonces")) {
      while ($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row['titre'] . '</td></tr>';
      }

      /* Libération du jeu de résultats */
      $result->close();
    }
    ?>
  </table>
</body>

</html>