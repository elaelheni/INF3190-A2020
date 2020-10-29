<?php
require 'functions.php';
//Checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3,
    'Pistache' => 4,
    'Noisette' => 5
];

//Radio
$cornets = [
    'Pot' => 1,
    'Biscuit' => 2
];

$supplements = [
    'Pépites de chocolat'  => 2,
    'Fruits secs' => 1,
    'Bonbons' => 0.5
];


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Revision pour l'examen">
    <title>Glace</title>
</head>
<body>
    <?php var_dump($_POST)?>

    <h2>Choisissez votre glace</h2>

    <form action="/glace.php" method="POST">
    <?php foreach($parfums as $parfum => $prix) :?>
        <div class="checkbox">
            <label for="champ-parfum">
                <?= checkbox('parfum', $parfum, $_POST) ?>

                <?=  $parfum ?> - <?= $prix ?>

            </label>
        </div>

    <?php endforeach; ?>
    
    <?php foreach($cornets as $cornet => $prix) :?>
        <div class="checkbox">
            <label for="champ-parfum">
                <?= radio('cornet', $cornet, $_POST) ?>

                <?=  $cornet ?> - <?= $prix ?>

            </label>
        </div>

    <?php endforeach; ?>

    <?php foreach($supplements as $supplement => $prix) :?>
        <div class="checkbox">
            <label for="champ-parfum">
                <?= checkbox('supplement', $supplement, $_POST) ?>

                <?=  $supplement ?> - <?= $prix ?>

            </label>
        </div>

    <?php endforeach; ?>

        <button type="submit">Composez votre glace</button>

    </form>
</body>

</html>