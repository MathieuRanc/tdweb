<?php
unset($_SESSION["auth"]);
unset($_SESSION["nom"]);

$_SESSION["auth"] = 0;

header("location:formulaire.php");
