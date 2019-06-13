<?php
include ('header.php');
//$_SESSION['droit'] = 1;//test droit
?> 
    <legend>Connexion à votre compte</legend>
    <form action="TraitCo.php" method="POST">
	    <table>
				<tr>
					<td><input type="text" name="nom" placeholder = "Nom" required></td>
				</tr>
				<tr>
					<td><input type="text" name="prenom" placeholder = "Prénom" required></td>
				</tr>
				<tr>
					<td><input type="password" name="mdp" placeholder = "Mot de passe" required></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="Valider">
					</td>
				</tr>
    	</table>
	</form>