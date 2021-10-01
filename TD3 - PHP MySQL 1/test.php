<!DOCTYPE html>

<html>


<head>
  <title>test</title>
</head>


<body>

  <h1>Je suis un fichier de test de fonctionnement du PHP</h1>

  <?php

  $i = 0;
  while ($i < 10) {
    echo "<h2>Tirage d'un nombre al&eacute;atoire : " . rand(0, 100) . "</h2>";
    $i = $i + 1;
  }
  ?>

  <p>*********************************************</p>

  <?php
  echo "<p align='center'>Today is " . date("l d F Y") . "</p>";
  ?>

</body>

</html>