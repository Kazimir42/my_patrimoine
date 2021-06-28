<?php
require 'model/modelUtilisateur.php';

$error = "";

if (empty($_SESSION["sessionUtilisateur"])) { //si la session est vide


    if (empty($_POST['pseudo']) || empty($_POST['password'])) { //si on le form de /connect est vide


    }else{ //si le form est plein
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
    
        // on recup l'user associé 
        $theUser = connectUser($pseudo, $password);
        
        if ($theUser == false) { //si on recup pas d'user
            $error = "Echec de connexion";
        }else{
         
            session_start();
            $_SESSION["sessionUtilisateur"] = $theUser;
        
            header('Location: /my_patrimoine/dashboard.php');
        }

    
    }


}else{ //si la session est pleine
    header('Location: /my_patrimoine/dashboard.php');
}

require 'view/viewConnect.php';

?>