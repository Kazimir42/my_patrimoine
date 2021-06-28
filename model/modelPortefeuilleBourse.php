<?php
require 'modelUtilisateur.php';

class PortefeuilleBourse
{
    public $user_id;
    public $id;
    public $nom;
    public $type;
    public $date_creation;
    public $date_derniere_modif;
    public $nombre_action;
    public $nombre_ligne;
    public $valeur_total;

    public function __construct()
    {
        
    }


}



function getAllPortefeuille($user_id){
  $bdd = getBdd();
  $stmt = $bdd->prepare('SELECT * FROM bourse WHERE user_id = :user_id2');
  $stmt->execute(array(':user_id2' => $user_id));
  $result = $stmt->fetchall();


  $lenghtResult = count($result);

  $allPortefeuille = array();
  for ($i=0; $i < $lenghtResult; $i++) { 

    $currentPortefeuilleBourse = new PortefeuilleBourse();
    $currentPortefeuilleBourse->user_id = $result[$i][0];
    $currentPortefeuilleBourse->id = $result[$i][1];
    $currentPortefeuilleBourse->nom = $result[$i][2];
    $currentPortefeuilleBourse->type = $result[$i][3];
    $currentPortefeuilleBourse->date_creation = $result[$i][4];
    $currentPortefeuilleBourse->date_derniere_modif = $result[$i][5];
    $currentPortefeuilleBourse->nombre_action = $result[$i][6];
    $currentPortefeuilleBourse->nombre_ligne = $result[$i][7];
    $currentPortefeuilleBourse->valeur_total = $result[$i][8];

    $allPortefeuille[$i] = $currentPortefeuilleBourse;
  }


  return $allPortefeuille;
}


/*
function getBdd() {
   $bdd = new PDO('mysql:host=localhost;dbname=base-test;charset=utf8', 'root', '');
  return $bdd;
 }*/


?>