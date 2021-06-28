<?php
//require 'model/objectUtilisateur.php';
require 'model/modelUtilisateur.php';

session_start();

if (empty($_SESSION)) { //si la session est vide on renvoi sur la page de connexion
    header('Location: /my_patrimoine/connect.php');
}


//echo "vous etes connecté en tant que " . $_SESSION["sessionUtilisateur"]->pseudo;

require 'view/viewDashboard.php';

?>