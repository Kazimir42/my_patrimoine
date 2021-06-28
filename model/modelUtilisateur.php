<?php
class Utilisateur
{
    public $id;
    public $pseudo;
    public $email;
    public $password;

    public function __construct()
    {
        
    }


}


function connectUser($pseudo, $pass){
  $bdd = getBdd();
  $stmt = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo AND pass = :pass');
  $stmt->execute(array(':pseudo' => $pseudo, 'pass' => $pass));
  $result = $stmt->fetch();
  
  $currentUtilisateur = new Utilisateur();
  $currentUtilisateur->id = $result[0];
  $currentUtilisateur->pseudo = $result[1];
  $currentUtilisateur->email = $result[2];
  $currentUtilisateur->password = $result[3];

  return $currentUtilisateur;
}












function getBdd() {
   $bdd = new PDO('mysql:host=localhost;dbname=base-test;charset=utf8', 'root', '');
  return $bdd;
 }


?>