function resultat(){
    let container = document.getElementById("suggestion");
    //fonction load utilise des promesses .then => .catch =>
	//.then => représente ce qu'on veut faire avec la valeur qu'on s'attend à recevoir.
    load().then(content => container.innerHTML = content)
        .catch(error => container.innerHTML = "<p>Une erreur s'est produite</p>");
}
//appel asynchrone. Await est un mot-clé pour pouvoir appeler des functions asynchrones.
//await permet d'attendre le résultat de la fonction sans bloquer l'application
async function load() {
    var cours = document.getElementById("champ-cours").value;
    let reponse = await fetch("../PHP/search.php?q="+cours);
    let content = await reponse.text();
    return content;
}
