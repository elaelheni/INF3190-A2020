<?php

/*
Message significatif pour chaque erreur et redirection
*/


function nomValide(){
    $nomEstValide = true;
    if(!isset($_POST["nom"])){
        http_response_code(400);
        exit;
    }
    $nom = $_POST["nom"];

    if((empty($nom))){
        $message = "Le champ nom est obligatoire";
        $nomEstValide = false;
    }
    if(strlen($nom) > 35){
        $message = "Le champ nom ne doit pas dépasser 35 caractères";
        $nomEstValide = false;
    }
    return $nomEstValide;
}

function prenomValide(){
    $prenomEstValide = true;

    if(!isset($_POST["prenom"])){
        http_response_code(400);
        exit;
    }

    $prenom = $_POST["prenom"];

    if((empty($prenom))){
        $message = "Le champ prénom est obligatoire";
        $prenomEstValide = false;
    }
    if(strlen($prenom) > 25){
        $message = "Le champ prénom ne doit pas dépasser 25 caractères";
        $prenomEstValide = false;
    }
    return $prenomEstValide;
}

function nomUtilisateurValide(){
    $nomUtEstValide = true;
    if(!isset($_POST["nom-utilisateur"])){
        http_response_code(400);
        exit;
    }
    $nomUtilisateur = $_POST["nom-utilisateur"];

    if((empty($nomUtilisateur))){
        $message = "Le champ prénom est obligatoire<";
        $nomUtEstValide = false;
    }
    if(strlen($nomUtilisateur) > 8){
        $message = "Le champ prénom ne doit pas dépasser 8 caractères";
        $nomUtEstValide = false;
    }
    return $nomUtEstValide;
}

function ageValide(){
    $ageEstValide = true;
    if(!isset($_POST["age"])){
        http_response_code(400);
        exit;
    }
    $age = $_POST["age"];

    if(empty($age)){
        $message = "Le champ âge est obligatoire";
        $ageEstValide = false;
    }
    if(strlen($age) > 2 || !is_numeric($age)){
        $message = "L'âge doit être composé d'au moins un chiffres.";
        $ageEstValide = false;
    }
    return $ageEstValide;
}

function verificationDonnees(){

    $prenomValide = $nomValide = $ageValide = $nomUtilisateurValide = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){

            $nomValide = nomValide();
            $prenomValide = prenomValide();
            $ageValide = ageValide();
            $nomUtilisateurValide = nomUtilisateurValide();
    }
    return $prenomValide && $nomValide && $ageValide && $nomUtilisateurValide;
}

if ($message == ""){
    header("Location: confirmation.php", false, 303);
      exit;
}
?>

<?php require 'head.php' ?>

<br>
    <?php if($message):?>
    <div>
        <?= $message ?>
    </div>
    <?php endif ?>

<form action="inscription.php" method="post">
	<fieldset>
      <legend>Inscription</legend>

	  <label for="champ-nom">Nom</label>
      <input type="text" id="champ-nom" name="nom" maxlength="35">
      <br>
      <br>
      <label for="champ-prenom">Prénom</label>
      <input type="text" id="champ-prenom" name="prenom" maxlength="25">
      <br>
      <br>
      <label for="mail">Courriel</label>
      <input type="email" name="email">
      <br>
      <br>
      <label for="champ-nom-utilisateur">Nom D'utilisateur</label>
      <input type="text" id="champ-nom-utilisateur" name="nom-utilisateur" maxlength="8">
      <br>
      <br>
      <label for="mot_passe">Mot de passe</label>
      <input type="password" name="mot_passe">
      <br>
      <br>
      <label for="champ-age">Âge</label>
      <select name="age" id="champ-age">
        <?php
          for($i = 18; $i < 36; $i++) {
            if ($i == $age) {
              $selected = "selected='selected'";
            } else {
              $selected = "";
            }
            echo "<option value='{$i}' {$selected}>{$i}</option>";
          }
        ?>
      </select>
      <br>
      <br>
      <label for="champ-sex">Sex</label>
      <div>
        <label for="inconnu">0 : Inconnu</label>
        <input type="radio" name="sex" id ="inconnu"
        value="0" checked>
        <label for="masculin">1 : Masculin</label>
        <input type="radio" name="sex" id="masculin" value="1">
        <label for="feminin">2 : Féminin</label>
        <input type="radio" name="sex" id="feminin" value="2">
        <label for="sans-objet">9 : Sans Objet</label>
        <input type="radio" name="sex" id="sans-objet" value="9">
      </div>
      <br>
      <br>
      <label for="champ-photo">Photo de profil</label>
      <input type="file" name="photo" id="champ-photo" accept="image/png, image/jpeg">
      <br>
      <br>
      <label for="champ-membre">Membre</label>
      <select name="membre" id="champ-membre">
        <option hidden value="">Choix membre</option>
        <option value="regulier">Membre régulier</option>
        <option value="premium">Membre prémium</option>
        <option value="observateur">Membre observateur</option>
      </select>
      <br>
      <br>
      <button type="submit">S'inscrire</button>

    </fieldset>
</form>

<?php require 'tail.php' ?>








