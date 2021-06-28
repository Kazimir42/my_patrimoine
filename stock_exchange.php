<?php
require 'model/modelPortefeuilleBourse.php';

session_start();

if (empty($_SESSION)) { //si la session est vide on renvoi sur la page de connexion
    header('Location: /my_patrimoine/connect.php');
}

$allPortefeuille = getAllPortefeuille( $_SESSION["sessionUtilisateur"]->id);


require 'view/viewStockExchange.php';

?>