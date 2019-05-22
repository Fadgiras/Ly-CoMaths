<?php
session_start();
$_SESSION['Niv'] = 1;//test Niv
include ('header.php');
?> 
    <legend>Connexion à votre compte</legend>
    <form action="TraitCo.php" method="POST">
	    <table>
				<tr>
					<td>Nom</td>
					<td><input type="text" name=nom" required></td>
				</tr>
				<tr>
					<td>Prénom</td>
					<td><input type="text" name="intitule" required></td>
				</tr>
				<tr>
					<td>Mot de passe</td>
					<td><input type="password" name="mdp" required></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="Valider">
					</td>
				</tr>
    	</table>
	</form>