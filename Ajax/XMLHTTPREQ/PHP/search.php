<?php
$fichier = fopen("../Static/Liste.txt","r");
//explode permet de récupérer le contenu d'un fichier à partir d'un séparateur (equivalant de la fonction split en java)
$listeCours = explode("\n",fread($fichier,filesize("../Static/Liste.txt")));
fclose($fichier);

//request récupère le paramètre envoyé sur la page (right click + inspect + network) 
//Remarquez que le serveur envoi le contenu du input dans l'attribut q 
$q = $_REQUEST["q"];

if($q != ""){
    //strtoupper met le contenu de q en majuscule, si l'utilisateur entre "inf1120" ça doit matcher le contenu du fichier
    $q = strtoupper($q);
    foreach ($listeCours as $cours){
        //stristr verifie si q est une partie d'un cours (Si 21 est dasn INF2120, INF2171..)
        if(stristr($cours, $q)){
            echo $cours . "<br>";
        }
    }
}
