<?php
include('header.php');
include('ConnexionBDD.php');
$Prenom = $_POST['Prenom'];
$Nom = $_POST['Nom'];
$mdp = $_POST['mdp'];
    $req = $dbh->prepare('SELECT Prenom, Nom, mdp FROM Utilisateur 
                          WHERE Prenom=? AND Nom = ?');
    $req->execute([$Prenom, $Nom]);
    $results = $req->fetch(PDO::FETCH_ASSOC);
if (password_verify('$mdp',$results['mdp'])){
    $message = 'Vous êtes connect&eacute;.';
    $erreur = false;
    $_SESSION['Connecte'] = 1;
    $_SESSION['Prenom'] = $Prenom;
    $_SESSION['Nom'] = $Nom;
    $_SESSION['Droit'] = $Droit;
    $_SESSION['Niv'] = $Niv;
  }
else{
    $message = 'Mauvais Nom, prenom ou mot de passe.';
    $erreur = true;
  }
// PARTIE VISIBLE
echo $message;
if ($erreur){
    echo ' <a href="compte.php">Veuillez r&eacute;essayer</a>';
  }
?>