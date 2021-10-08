<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>Cathégorie</th>
        <th>Date</th>
        <th>Titre</th>
        <th>Annonce</th>
      </tr>
    </thead>
    <tbody>
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

      if ($result = $mysqli->query("SELECT categorie,date,titre,texte,visible FROM annonces JOIN categories ON annonces.IDCategorie=categories.IDcategorie")) {
        while ($row = $result->fetch_assoc()) {
          if ($row["visible"] === '1') $class = "visible";
          else  $class = "hidden";

          echo '<tr class="' . $class . '">';
          echo '<td>' . $row['categorie'] . '</td>';
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
</body>

</html>

<style>
  table {
    border: 1px solid #999;
  }

  td,
  th {
    border: 1px solid black;
  }

  th {
    color: black;
    padding: 10px 6px;
  }

  table {
    border-collapse: collapse;
  }

  td {
    min-width: 100px;
    padding: 6px;
  }

  .hidden td {
    color: #F90;
  }

  thead,
  tfoot {
    background-color: #999;
    color: #fff;
  }
</style>