<?php
//pour pouvoir utiliser mes fonctions checkbox et radio
require 'functions.php';

$message = null;
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

//checkbox
$supplements = [
    'Pépites de chocolat'  => 2,
    'Fruits secs' => 1,
    'Bonbons' => 0.5
];



$total = 0;

//Pour valider que mes variables existent
if($_SERVER["REQUEST_METHOD"] ==  "POST"){
if (!isset($_POST['parfum']) || !isset($_POST['supplement']) || !isset($_POST['cornet'])){
    $message = "Les champs sont obligatoires";
    http_response_code(400);
    exit;

}
}

//Pour valider que mes variables ne sont pas vides
if(empty($_POST['parfum']) || empty($_POST['supplement']) || empty($_POST['cornet'])){
    $message = "Valeur est manquante";
    
}


//Pour chaque parfum coché par mon client, je récupère son prix à partir de ma liste de parfums déclarée ci haut et je l'ajoute a mon total
if (isset($_POST['parfum'])){
    foreach($_POST['parfum'] as $parfum){
        if(isset($parfums[$parfum])){
            $total+=$parfums[$parfum];
        }

    }
}

//Pour chaque supplement coché par mon client, je récupère son prix à partir de ma liste de supplements déclarée ci haut et je l'ajoute a mon total
if (isset($_POST['supplement'])){
    foreach($_POST['supplement'] as $supplement){
        //Pour valider que le supplement existe dans ma liste => Pour ne pas permettre à l'utilisateur d'entrer n'importe quoi
        if(isset($supplements[$supplement])){
            $total+=$supplements[$supplement];
        }

    }
}

//Pour le type de cornet selectionné, cherche son prix dans ma liste de cornets déclarée ci-haut et ajoute le à mon total
if (isset($_POST['cornet'])){
    $cornet = $_POST['cornet'];
    if(isset($cornet)){
        $total+=$cornets[$cornet];
    }
}
//stocker mon total dans un cookie pour pouvoir l'utiliser plus tard
setcookie('total', $total);

//rediriger mon formulaire valide
header("Location: prix.php");


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Revision pour l'examen">
    <title>Glace</title>
</head>
<body>
    <!-- debogger pour afficher les choix de mon client -->
    <?php var_dump($_POST)?>
    <!-- afficher mon message d'erreur si il existe -->
    <?php if($message) :?>
        <p>
            <?= $message ?>
        </p>
    <?php endif ?>

    <h2>Choisissez votre glace</h2>

    <form action="/glace.php" method="POST">

    <h4>Choisissez votre parfum :</h4>
    <br>
    <?php foreach($parfums as $parfum => $prix) :?>
        <div class="checkbox">
            <label for="champ-parfum">
                <?= checkbox('parfum', $parfum, $_POST) ?>

                <?=  $parfum ?> - <?= $prix ?>

            </label>
        </div>

    <?php endforeach; ?>
    
    <h4>Choisissez votre cornet:</h4>
    <br>
    <?php foreach($cornets as $cornet => $prix) :?>
        <div class="checkbox">
            <label for="champ-parfum">
                <?= radio('cornet', $cornet, $_POST) ?>

                <?=  $cornet ?> - <?= $prix ?>

            </label>
        </div>

    <?php endforeach; ?>
    
    <h4>Choisissez votre supplement :</h4>
    <br>
    <?php foreach($supplements as $supplement => $prix) :?>
        <div class="checkbox">
            <label for="champ-parfum">
                <?= checkbox('supplement', $supplement, $_POST) ?>

                <?=  $supplement ?> - <?= $prix ?>

            </label>
        </div>

    <?php endforeach; ?>
        <br>
        <button type="submit">Composez votre glace</button>

    </form>
</body>

</html>