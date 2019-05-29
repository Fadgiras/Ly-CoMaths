<?php
include ('header.php');
?>
<legend>Création de comptes</legend>
<form action="TraitCompte.php" method="POST">
    <input type="radio" name="rad" value="1"/><label>Professeur</label>
	<input type="radio" name="rad" checked="checked" value="0" id="Eleve"/><label>Eleve</label>
	<div id="toc"></div>
    <table>
            <tr>
                <td>Nom : </td>
                <td><input type="text" name="nom" required></td>
            </tr>
            <tr>
                <td>Prénom : </td>
                <td><input type="text" name="prenom" required></td>
            </tr>
            <tr>
                <td>
                    <select name= "niv" label= "Niveau : ">
                        <option selected disabled> Niveau</option>
                        <option value="0">Terminale</option>
                        <option value="1">Premiere</option>
                        <option value="2">Seconde</option>
                        <option value="3">Troisieme</option>
                        <option value="4">Quatrieme</option>
                        <option value="5">Cinquieme</option>
                        <option value="6">Sixieme</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Mot de passe : </td>
                <td><input type="password" name="mdp" required></td>
            </tr>
            <tr>
                <td>Confirmation : </td>
                <td><input type="password" name="mdp2" required></td>
            </tr>
            <tr>
                <td>Adresse Mail : </td>
                <td><input type="email" name="mail" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="Valider">
                </td>
            </tr>
    </table>
</form>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll("input[name=rad]").forEach(radioButton => {
            radioButton.addEventListener("click", () => {
                const options = document.querySelectorAll("select");
                if(document.getElementById('Eleve').checked) {
                    options.forEach(elem => {
                        elem.style.display = "inherit";
                    });
                }
                else {
                    options.forEach(elem => {
                        elem.style.display = "none";
                    });
                }
            });
        });
    });
</script>