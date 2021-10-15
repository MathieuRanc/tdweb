<?php
session_start();

unset($_SESSION["auth"]);
unset($_SESSION["nom"]);

session_destroy();

header("location:formulaire.php");
