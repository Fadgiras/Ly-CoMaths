<?php
include ('header.php');
require 'autoload.php';
$desti = $_POST['desti'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mess = $_POST['mess'];
$fichier = $_POST['Fichier'];
$destif = "$desti@gmail.com";
$from = "$nom $prenom depuis La messagerie Ly-CoMaths";
$to = 'adressedestinataire';
$subject = "Vérification PHP mail";
$message = "PHP mail marche";
$headers = "From:" . $from;
//mail($to,$subject,$message, $headers);

$mail = new PHPMailer;
$mail->setFrom('from@example.com', 'Your Name');
$mail->addAddress('mayeuxgudinaflorian@gmail.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
echo "L'email a été envoyé.";
?> 