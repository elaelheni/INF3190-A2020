function ordre(){
   let p1 = document.getElementById("p1").innerHTML;
   let p2 = document.getElementById("p2").innerHTML;
   let p3 = document.getElementById("p3").innerHTML;

    document.getElementById("p3").innerHTML = p1;
    document.getElementById("p1").innerHTML = p2;
    document.getElementById("p2").innerHTML = p3;

}

function color() {
    document.getElementById("titre").style.color = "blue";
}

function validerFormulaire() {
   const dateFormatValide = validerDate();
   const genreFormatValide = validerGenre();
   const nomValide = validerChamps("nom", "nom-erreur");
   const prenomValide = validerChamps("prenom","prenom-erreur");
   const dateValide = validerChamps("date","date-erreur");
   const genreValide = validerChamps("genre","genre-erreur");


   const champsValide = nomValide && prenomValide && dateValide && genreValide;

    return dateFormatValide && champsValide && genreFormatValide;
}

function validerDate() {
   let date = document.getElementById("date").value;
    if(! date.match(/(\d{4})-(\d{2})-(\d{2})/g)){
        document.getElementById("date-erreur").innerHTML = "Ce format n'est pas valide.";
        document.getElementById("date-erreur").style.color = "red";
        return false;
    }
    return true;
}

function validerChamps(inputId, spanId) {
   let champ = document.getElementById(inputId).value;

    if(champ == null || champ === ""){
        document.getElementById(spanId).innerHTML = "Ce champ est obligatoire.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}

function validerGenre() {
  let genre = document.getElementById("genre").value;

    if(genre !== "F" && genre !== "M"){
        document.getElementById("genre-erreur").innerHTML = "Les valeurs acceptées sont F ou M.";
        document.getElementById("genre-erreur").style.color = "red";
        return false;
    }
    return true;
}