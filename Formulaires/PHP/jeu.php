<?php
$aDeviner = 300;
$echec = null;
$succes = null;
$chiffre = null;

if (isset($_GET["chiffre"])){
    $chiffre = (int)$_GET["chiffre"];
    if ($chiffre < $aDeviner){
        $echec = "Oups! Trop petit";
    }
    elseif ($chiffre > $aDeviner){
        $echec = "Oups! Trop grand";
    }
    else {
        $succes = "Bravo! Vous avez trouvé le chiffre <strong>$aDeviner</strong>";
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Exercice INF3190">
    <title>Jeu</title>
</head>
<body>
    <h3>Essayez de deviner un nombre entre 0 et 1000</h4>
    <br>
    <?php if($echec):?>
    <div>
        <?= $echec ?>
    </div>
    <?php elseif($succes):?>
    <div>
        <?= $succes ?>
    </div>
    <? endif ?>


    <form action="jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= $chiffre?>">
    <button type="submit">Deviner</button>
    </form>

</body>
</html>