<!DOCTYPE HTML>
<HTML>
<body>
  <header>
    <a href="./index.php"><img src="images/banner.png" /></a>
    <nav class="menubar">
      <ul>
      <li><a href="index.php"> Accueil </a></li>
      <?php
      if ($_SESSION['Niv'] > 0){
        echo '<li>Panel Admin<ul>';
        //include_once("ConnexionBDD.php");
        //$Niv = $dbh->query('SELECT Niv FROM Utilisateur WHERE id = $_SESSION['id']');
        $Niv = 2;//test admin
        if ($Niv === 2){
          ?><li><a href="GCompte.php">Gestion Des Comptes</a></li>
          <?php
        }
        ?>
        <li><a href="GFichier.php">Gestion Des Fichiers</a></li>
        <li><a href="GCours.php">Mise en ligne des Cours</a></li></ul>
      <?php
      }
      ?>
      <li>Cours<ul>
          <?php 
          include_once("ConnexionBDD.php");
          $prof_req = $dbh->prepare('SELECT nom FROM Utilisateur WHERE Niv = 1 OR Id=1');
          $prof_req->execute();
          $results = $prof_req->fetch(PDO::FETCH_ASSOC);
          do {
          ?>
          <li><a href="cours/<?php echo $results['nom']; ?>"><?php echo $results['nom']; ?></a>
          <?php
          }while($results = $prof_req->fetch(PDO::FETCH_ASSOC)); ?>
          </ul>
        
        <!--<<_php  _ sont des ?
          include_once("ConnexionBDD.php");
          $prof_req = $dbh->query('SELECT Utilisateur.nom FROM Utilisateur WHERE utilisateur.Niv = 1 OR Id=1');
          $prof_list = $prof_req->fetchAll();
          foreach ($prof_list as $prof){
          echo '<option value="'.$prof[0].'">'.$prof[0].'</option>';
            }
         _>>-->
        
      </li>
      <li><a href="compte.php"> Compte </a></li>
      <li><a href="contact.php"> Contacter&nbsp;un&nbsp;professeur</a></li>
      </ul>
    </nav>
  </header>
</body>
<HTML>