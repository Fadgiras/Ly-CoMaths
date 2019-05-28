<?php
include('header.php');
include('ConnexionBDD.php');
$message = '';
$erreur = FALSE;
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
if ($_POST['rad']==='0'){
    $niv = $_POST['niv'];
}
else{
    $niv = 7;
}
$mdp = $_POST['mdp'];
$mdp2 = $_POST['mdp2'];
$email = $_POST['mail'];
if($mdp = $mdp2){
    $hash = password_hash($mdp, PASSWORD_ARGON2I);
    $req = $dbh->prepare("INSERT INTO utilisateur (nom, prenom, mdp, mail, niv, droit) VALUES ('$nom', '$prenom', '$hash', '$email', '$niv', 0 )");
    $req->execute();
}    
else{
    $message = 'Les mots de passe ne correspondent pas.';
    $erreur = true;
}
// PARTIE VISIBLE
echo $message;
if ($erreur){
    echo ' <a href="compte.php">Veuillez r&eacute;essayer</a>';
  }
else{
    echo 'Compte Créé ! <br><a href ="GCompte.php">Retour à la page de gestion des comptes</a>';
}
?>