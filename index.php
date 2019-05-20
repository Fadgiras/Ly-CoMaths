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
    if ($_SESSION['niv'] === 1 || $_SESSION['niv'] === 2){
      echo '<li><a>Panel Admin</a>';
      include_once("ConnexionBDD.php");
      $prof_req = $dbh->query('SELECT nom FROM Utilisateur WHERE niv = 1');
      $prof_list = $prof_req->fetchAll();
      foreach ($prof_list as $prof){
        echo '<option value="'.$prof[0].'">'.$prof[1].'</option>';
      }
      echo '</li>'
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