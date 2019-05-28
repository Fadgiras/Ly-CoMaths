<?php
include('header.php');
include('ConnexionBDD.php');
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mdp = $_POST['mdp'];
    $req = $dbh->prepare('SELECT prenom, nom, mdp FROM utilisateur 
                          WHERE prenom=? AND nom = ?');
    $req->execute([$prenom, $nom]);
    $results = $req->fetch(PDO::FETCH_ASSOC);
if (password_verify('$mdp',$results['mdp'])){
    $message = 'Vous êtes connect&eacute;.';
    $erreur = false;
    $_SESSION['Connecte'] = 1;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['nom'] = $nom;
    $_SESSION['droit'] = $droit;
    $_SESSION['Niv'] = $Niv;
  }
else{
    $message = 'Mauvais nom, prenom ou mot de passe.';
    $erreur = true;
  }
// PARTIE VISIBLE
echo $message;
if ($erreur){
    echo ' <a href="compte.php">Veuillez r&eacute;essayer</a>';
  }
?>