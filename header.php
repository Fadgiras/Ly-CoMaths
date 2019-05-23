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
      //$_SESSION['Droit'] = 1;//test Droit
      $_SESSION['Connecte'] = 1;//test Connecte
      $_SESSION['Niv'] = 7;//test Niv de classe
      $Nom = 'Helldrac'; // test Nom
      if($_SESSION['Connecte'] === 1){
        if ($_SESSION['Niv'] === 7){
          echo '<li>Panel Admin<ul>';
      ?>
          <li><a href="GCompte.php">Gestion Des Comptes</a></li>
          <li><a href="GFichier.php">Gestion Des Fichiers</a></li>
          <li><a href="GCours.php">Mise en ligne des Cours</a></li></ul>
        <?php
        }
      }
      ?>
      <li>Cours<ul>
          <?php 
          include_once("ConnexionBDD.php");
          $prof_req = $dbh->prepare('SELECT Nom FROM Utilisateur WHERE Niv = 7');
          $prof_req->execute();
          $results = $prof_req->fetch(PDO::FETCH_ASSOC);
          do {
          ?>
          <li><a href="cours/<?php echo $results['Nom']; ?>"><?php echo $results['Nom']; ?></a>
          <?php
          } while($results = $prof_req->fetch(PDO::FETCH_ASSOC)); ?>
          </ul>
        
        <!--< morceau de code qui servira
          <select>
          <_php  _ sont des ?
          include_once("ConnexionBDD.php");
          $prof_req = $dbh->query('SELECT Utilisateur.nom FROM Utilisateur WHERE utilisateur.Droit = 1 OR Id=1');
          $prof_list = $prof_req->fetchAll();
          foreach ($prof_list as $prof){
          echo '<option value="'.$prof[0].'">'.$prof[0].'</option>';
            }
         _>
         </select>
         >-->
        
      </li>
      <li><a href="compte.php"> Compte </a></li>
      <li><a href="contact.php"> Contacter&nbsp;un&nbsp;professeur</a></li>
      </ul>
    </nav>
  </header>
</body>
<HTML>