<?php
include ('header.php');
?>
<legend></legend>
<form action="TraitMess.php" method="POST">
        <p>
            <select name="desti">
                <option selected disabled>Choisissez votre Professeur</option>
                <?php // _ sont des ?
                include_once("ConnexionBDD.php");
                $prof_req = $dbh->query('SELECT utilisateur.nom FROM utilisateur WHERE utilisateur.niv = 7');
                $prof_list = $prof_req->fetchAll();
                foreach ($prof_list as $prof){
                    echo '<option value="'.$prof[0].'">'.$prof[0].'</option>';
                    }
                ?>
            </select>
        </p>
        <p>
            <input type="text" name="prenom" placeholder = "prénom" required>
        </p>
        <p>
            <input type="text" name="nom" placeholder = "nom" required>
        </p>
        <p>
            <input type="text" name="sujet" placeholder = "sujet" required>
        </p>
        <p>
            <textarea id="message" name="mess" tabindex="4" cols="30" rows="8" placeholder = "Entrez votre message"></textarea>
        </p>
            <input type="file" name="Fichier" id="Fichier">
            <script>
                var uploadField = document.getElementById("Fichier");
                uploadField.onchange = function() {
                    if(this.files[0].size > 52428800){ //50 Mo limite
                    alert("Le fichier est trop volumineux !");
                    this.value = "";
                    };
                };
            </script>
        <p>
            <input type="submit" name="Valider">
        </p>
</form>
