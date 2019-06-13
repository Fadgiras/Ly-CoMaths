<?php
include ('header.php');
if ($_SESSION['niv']===7){
?>
<legend>Création de comptes</legend>
<form action="TraitCompte.php" method="POST">
    <input type="radio" name="rad" value="1"/><label>Professeur</label>
	<input type="radio" name="rad" checked="checked" value="0" id="Eleve"/><label>Eleve</label>
	<div id="toc"></div>
    <table>
            <tr>
                <td><input type="text" name="nom" placeholder = "Nom" required></td>
            </tr>
            <tr>
                <td><input type="text" name="prenom" placeholder = "Prénom" required></td>
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
                <td><input type="password" name="mdp" placeholder = "Mot de passe" required></td>
            </tr>
            <tr>
                <td><input type="password" name="mdp2" placeholder = "Confirmation" required></td>
            </tr>
            <tr>
                <td><input type="email" name="mail" placeholder = "Votre Adresse Mail" required></td>
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
<?php
}
else{
    echo'Accès refusé.';
}
?>