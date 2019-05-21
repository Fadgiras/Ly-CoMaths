<!DOCTYPE HTML>
<HTML>
  <?php
  session_start();
  ?>
  <head>
    <meta charset="utf-8">
    <title> Ly-CoMaths </title>
    <!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="style/common.css">
  </head>
  <body>
  <header>
    <a href="./index.php"><img src="images/banner.png" /></a>

    <nav class="menubar">
      <ul>
      <li><a href="index.php"> Accueil </a></li>
      <?php
      if ($_SESSION['niv'] > 0){
        echo '<li>Panel Admin<ul>';
        //include_once("ConnexionBDD.php");
        //$prof_req = $dbh->query('SELECT niv FROM Utilisateur WHERE id = $_SESSION['id']');
        $prof_req = 2
          if ($prof_req === 2){
            ?><li><a href="GCompte.php">Gestion Des Comptes</a></li><?php
          }
        }
        ?><li><a href="GFichier.php">Gestion Des Fichiers</a></li>
        <li><a href="GCours.php">Mise en ligne des Cours</a></li>
        </li><?php
      }
      
      ?>
      <li><a> Cours </a>
        <?php
        include_once("ConnexionBDD.php");
        $prof_req = $dbh->query('SELECT nom FROM Utilisateur WHERE niv = 1');
        $prof_list = $prof_req->fetchAll();
        foreach ($prof_list as $prof){
        echo '<option value="'.$prof[0].'">'.$prof[1].'</option>';
          }
        ?>
      </li>
      <li><a href="compte.php"> Connexion </a></li>
      <li><a href="contact.php"> Contacter&nbsp;un&nbsp;professeur</a></li>
      </ul>
    </nav>
  </header>
</HTML>