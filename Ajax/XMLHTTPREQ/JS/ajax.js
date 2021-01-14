function resultat() {
    var cours = document.getElementById("champ-cours").value;

    var xmlhttp = new XMLHttpRequest();
    //Lorsque l'état de l'objet xmlhttp change, on écrit une fonction qui récupère le résultat de la requete.
    //readyState 4 signifie que la requête est prête et status 200 signifie OK.
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            document.getElementById("suggestion").innerHTML = xmlhttp.responseText;
        }
    };

    //requête HTTP. Contrairement à l'étape PHP où le contenu de l'input était envoyé dans l'url avec ?cours=INF,
    //en inspectant la page (right click + inspect) on peut voir que la valeur de l'input est envoyée dans l'attribut q.
    xmlhttp.open("GET", "../PHP/search.php?q=" + cours, true);
    //envoi de la requête
    xmlhttp.send();
}
