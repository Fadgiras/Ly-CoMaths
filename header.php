<!DOCTYPE HTML>
<HTML>
<body>
  <header>
    <a href="./index.php"><img src="images/banner.png" /></a>
    <link rel="stylesheet" href="style/common.css">
    <nav class="menubar">
      <ul>
      <li><a href="index.php"> Accueil </a></li>
      <?php
      session_start();
      $_SESSION['droit'] = 0;//test droit
      $_SESSION['connecte'] = 1;//test connecte
      $_SESSION['niv'] = 7;//test niv de classe
      $nom = 'Helldrac'; // test nom
      if($_SESSION['connecte'] === 1){
        if ($_SESSION['niv'] === 7){
          echo '<li>Panel Admin<ul>';
      ?>
          <li><a href="GCompte.php">Gestion Des Comptes</a></li>
          <li><a href="GFichier.php">Gestion Des Fichiers</a></li>
          <li><a href="GCours.php">Gestion Des Cours</a></li></ul>
        <?php
        }
      }
      ?>
      <li>Cours<ul>
          <?php 
          include_once("ConnexionBDD.php");
          $prof_req = $dbh->prepare('SELECT nom FROM utilisateur WHERE niv = 7');
          $prof_req->execute();
          $results = $prof_req->fetch(PDO::FETCH_ASSOC);
          do {
          ?>
          <li><a href="cours/<?php echo $results['nom']; ?>"><?php echo $results['nom']; ?></a>
          <?php
          } while($results = $prof_req->fetch(PDO::FETCH_ASSOC)); ?>
          </ul>
      </li>
      <li><a href="compte.php"> Compte </a></li>
      <li><a href="Contact.php"> Contacter&nbsp;un&nbsp;professeur</a></li>
      </ul>
    </nav>
  </header>
</body>
<HTML>