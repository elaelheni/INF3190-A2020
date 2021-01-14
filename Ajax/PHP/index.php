<html lang="fr">
<head>
<metha charset="UTF-8">
<title>AJAX</title>
<body>
<h3>Chercher un cours</h3>
<form action="index.php" method="get">
    <label for="champ-cours">Titre du cours</label>
    <input type="text" id="champ-cours" name="cours">
    <button type="submit">Chercher..</button>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == 'GET'){
    if(!isset($_GET["cours"])){
        http_response_code(400);
        exit;
    }
    $fichier = fopen("Static/Liste.txt","r");
    //explode permet de récupérer le contenu d'un fichier à partir d'un séparateur (equivalant de la fonction split en java)
    $listeCours = explode("\n",fread($fichier,filesize("Static/Liste.txt")));
    fclose($fichier);

    $q = $_REQUEST["cours"];
    $suggestion = array();
    if($q != ""){
        //strtoupper met le contenu de q en majuscule, si l'utilisateur entre "inf1120" ça doit matcher le contenu du fichier
        $q = strtoupper($q);
        foreach ($listeCours as $cours){
            //stristr verifie si q est une partie d'un cours (Si 21 est dasn INF2120, INF2171..)
            if(stristr($cours,$q)){
                array_push($suggestion, $cours);
            }
        }
    }
    echo "<p>Suggestion: </p>";
    foreach ($suggestion as $cours){
        echo $cours . "<br>";
    }
}
?>
