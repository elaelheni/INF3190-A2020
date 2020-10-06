<?php
$nom = null;
$prenom = null;
$age = null;
$message = null;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["age"])){
        echo "<p>Données manquantes!</p>";
        http_response_code(400);
        exit;
    }
}

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];

if($nom == ''){
    $message = $message . "Le champ <strong>Nom</strong> est obligatoire!";
}
if($prenom == ''){
    $message = $message . "Le champ <strong>Prénom</strong> est obligatoire!";
}
if($age == ''){
    $message = $message . "Le champ <strong>Age</strong> est obligatoire!";
}
if($age<0 || $age>99){
    $message = $message . "L'age doit etre composé de 2 chiffres";
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Exercice INF3190">
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    
    <?php if($message) :?>
        <div>
            <?= $message ?>
        </div>
    <?php endif ?>

    <form action="inscription.php" method="POST">
        <label for="champ-nom">Nom :</label>
        <?php echo "<input type='text' name='nom' id='champ-nom' value=$nom>"; ?>
        <br>
        <br>
        <label for="champ-prenom">Prénom :</label>
        <?php echo "<input type='text' name='prenom' id='champ-prenom' value=$prenom>"; ?>
        <br>
        <br>
        <label for="champ-age">Age :</label>
        <?php echo "<input type='number' name='age' id='champ-age' value=$age>"; ?>
        <br>
        <br>
        <label for="champ-sex">Sex :</label>
        <select name="sex" id="champ-sex">
            <option value="" selected="selected">0: inconnu</option>
            <option value="">1: masculin</option>
            <option value="">2: feminin</option>
            <option value="">9: sans objet</option>
        </select>
        <br>
        <br>
        <label for="champ-parfum">Votre parfum préféré :</label>
        <br>
        <input type="checkbox" name="parfum" value="Fraise">Fraise
        <br>
        <input type="checkbox" name="parfum" value="Chocolat">Chocolat
        <br>
        <input type="checkbox" name="parfum" value="Vanille">Vanille
        <br>
        <input type="checkbox" name="parfum" value="Autre" checked="checked">Autre
        <br>
        <br>
        <label for="description">Comment comptez-vous utiliser votre compte?</label>
        <br>
        <textarea id="description" name="description" row="5" cols="70"></textarea>
        <br>
        <br>
        <input type="submit" value="S'inscrire">

    </form>

    
   
</body>
</html>