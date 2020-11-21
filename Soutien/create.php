<?php
require 'menu.php';

use function Menu\{read, write, findAll, create, findById};


$succes = null;
$echec = [ ];
$plat;
$prix;
$message = null;


$prixValide = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $plat = $_POST["plat"];
    $prix = $_POST["prix"];

    if (empty($plat)) {
        $echec[] = $plat;
        $mesPlatExi = "Le nom d'un plat est obligatoire !";
        $platExiste = false;
    } else {
        $platExiste = true;
        $mesPlatExi="";
    }

    if (strlen($plat) > 50) {
        $echec[] = $plat;
        $mesPlatVal= "Le nom d'un plat ne doit contenir qu'un maximum de 50 caractères";
        $platValide = false;
    } else {
        $platValide = true;
        $mesPlatVal="";
    }

    if (empty($prix)) {
        $echec[] =  $prix;
        $mesPrixExi = "Le prix d'un plat est obligatoire !";
        $prixExiste = false;
    } else {
        $prixExiste = true;
        $mesPrixExi="";
    }

    if (!is_numeric($prix) || ($prix >= 30 && $prix < 0)) {
        $echec[] = $prix;
        $mesPrixVal = "Le prix d'un plat doit etre supérieur à 0$ et inférieur ou égal à 30$.";
        $prixValide = false;
    } else {
        $prixValide = true;
        $mesPrixVal="";
    }

    if (count($echec) == 0) {
        $nouveau = [
            "plat" => $plat,
            "prix" => $prix
        ];
        $idNouvelItem = create($nouveau);
        $nouvelItem = findById($idNouvelItem);
        $succes = "Votre plat a été ajouté au menu avec succès !";
        header("Location: index.php?succes={$succes}");
        exit;
    }else {
        $message = "OOPS! Des erreurs empechent l'ajout du plat!";
    }
}


require 'head.php';
?>
<div class="informations">
    <?php if ($message) : ?>
        <div class="alert alert-danger" role="alert">OOPS! Des erreurs empechent l'ajout du plat!</div>
    <? endif ?>

</div>

<div class="entete">
<br>
<h3 class="titre">Ajouter un nouveau plat</h3>
<br>
</div>

<div class="contenu">

    <form method="POST" action="create.php">
        <div class="form-group">
            <label for="champ-plat">Nom du plat</label>
            <input type="text" id="champ-plat" name="plat" value=<?= $plat ?> >
            <?php if (!$platValide): ?>
                <p class="err"><?= $mesPlatVal ?></p>
            <? endif; ?>
            <?php if (!$platExite): ?>
                <p class="err"><?= $mesPlatExi ?></p>
            <? endif; ?>
        </div>
        <div class="form-group">
            <label for="champ-prix">Prix du plat</label>
            <input type="text" id="champ-prix" name="prix" value=<?= $prix ?> >
            <?php if (!$prixValide): ?>
                <p class="err"><?= $mesPrixVal?></p>
            <? endif; ?>
            <?php if (!$prixExiste): ?>
                <p class="err"><?= $mesPrixExi ?></p>
            <? endif; ?>



        </div>
        <button class="btn btn-info" type="submit">Ajouter</button>
        <br>
        <br>
    </form>

</div>
<?php require 'tail.php' ?>